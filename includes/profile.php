<?php
session_start();
//$_SESSION['login_user'] = $email;
include 'dbcon.php';

// submit Customer details
if (isset($_POST['updateCustomer'])) {
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $teleNumber = $_POST['teleNumber'];

    $email = $_SESSION['email'];

    $queryUser = "UPDATE customer SET fullName= '$fullName', address='$address', teleNumber='$teleNumber', email='$email' WHERE email='$email'";
    if (mysqli_query($conn, $queryUser)) {
        $_SESSION['name'] = $fullName;
        $_SESSION['address'] = $address;
        $_SESSION['telephone'] = $teleNumber;

        // alert
        $_SESSION['status'] = "User details updated Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: ../UserProfile.php?success");
    } else {
        // alert
        $_SESSION['status'] = "Failed to update user details! Try again.";
        $_SESSION['status_code'] = "error";
        header("location: ../UserProfile.php?success");
        // echo "Error updating record: " . mysqli_error($conn);
    }
}
// submit customer Password
else if (isset($_POST['submitCusPassword'])) {

    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $email = $_SESSION['login_user'];

    $queryPassword = "UPDATE customer SET password= '$newPass' WHERE email='$email'";
    if (mysqli_query($conn, $queryPassword)) {

        // alert
        $_SESSION['status'] = "New password updated Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: ../UserProfile.php?password-updated");
    } else {
        // alert
        $_SESSION['status'] = "Password update failed! Try again";
        $_SESSION['status_code'] = "error";
        header("location: ../UserProfile.php?password-update-failed");
        // echo "Error updating record: " . mysqli_error($conn);
    }
}
// submit farmer details
else if (isset($_POST['updateFarmer'])) {
    $fullName = $_POST['fullName'];
    $farmName = $_POST['farmName'];
    $farmAddress = $_POST['farmAddress'];
    $farmArea = $_POST['farmArea'];
    $teleNumber = $_POST['teleNumber'];

    $farmerCode1 = $_SESSION['farmerCode'];


    $queryUser = "UPDATE farmer SET fullName= '$fullName',farmName='$farmName', farmArea = '$farmArea',farmAddress='$farmAddress', teleNumber='$teleNumber' WHERE farmerCode='$farmerCode1'";

    if (mysqli_query($conn, $queryUser)) {

        $_SESSION['name'] = $fullName;
        $_SESSION['farmName'] = $farmName;
        $_SESSION['address'] = $farmAddress;
        $_SESSION['farmArea'] = $farmArea;
        $_SESSION['telephone'] =  $teleNumber;

        // alert
        $_SESSION['status'] = "Farmer details updated Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: ../UserProfile.php?success");
    } else {
        // alert
        $_SESSION['status'] = "farmer details update failed! Try again";
        $_SESSION['status_code'] = "error";
        header("location: ../UserProfile.php?failed");
        // echo "Error updating record: " . mysqli_error($conn);
    }
}
// submit Farmer Password
else if (isset($_POST['submitFarPassword'])) {

    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $farmerCode = $_SESSION['login_user'];

    $queryPassword = "UPDATE farmer SET password= '$newPass' WHERE farmerCode='$farmerCode'";
    if (mysqli_query($conn, $queryPassword)) {
        // alert
        $_SESSION['status'] = "New password updated Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: ../UserProfile.php?password-update-success");
    } else {
        // alert
        $_SESSION['status'] = "Failed to update password ! Try again.";
        $_SESSION['status_code'] = "error";
        header("location: ../UserProfile.php?password-update-failed");
        echo "Error updating record: " . mysqli_error($conn);
    }
}
// update profile pic
else if (isset($_POST['UpdateProfilePic'])) {
    // for the database
    // $bio = stripslashes($_POST['bio']);
    $profileImageName = time() . '-' . $_FILES["profile-image-upload"]["name"];
    $target_dir = "";
    $sql = "";
    $email = "";
    $farmerCode = "";
    // For image upload
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == "farmer") {
        $farmerCode = $_SESSION['farmerCode'];
        $target_dir = "../assets/uploads/farmer/profile/";
        $sql = "UPDATE farmer SET profilePic= '$profileImageName' WHERE farmerCode='$farmerCode'";
    } else {
        $email = $_SESSION['email'];
        $target_dir = "../assets/uploads/customer/profile/";
        $sql = "UPDATE customer SET profilePic= '$profileImageName' WHERE email='$email'";
    }

    $target_file = $target_dir . basename($profileImageName);

    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if ($_FILES['profile-image-upload']['size'] > 2000000) {
        $msg_class = "alert-danger";
        // alert
        $_SESSION['status'] = "Image size should not be greater than 2000Kb !";
        $_SESSION['status_code'] = "warning";
        header("location: ../UserProfile.php?upload-failed");
    }
    // check if file exists
    if (file_exists($target_file)) {

        $msg_class = "alert-danger";
        // alert
        $_SESSION['status'] = "File already exists! ";
        $_SESSION['status_code'] = "warning";
        header("location: ../UserProfile.php?upload-failed");
    }
    // Upload image only if no errors
    if (empty($error)) {
        if (move_uploaded_file($_FILES["profile-image-upload"]["tmp_name"], $target_file)) {

            if (mysqli_query($conn, $sql)) {
                $_SESSION['profilePic'] =  $profileImageName;

                $msg_class = "alert-success";
                // alert
                $_SESSION['status'] = "Image uploaded and saved to the database!";
                $_SESSION['status_code'] = "success";
                header("location: ../UserProfile.php?upload-success");
            } else {

                $msg_class = "alert-danger";
                // alert
                $_SESSION['status'] = "Error uploading to the database! Try again.";
                $_SESSION['status_code'] = "error";
                header("location: ../UserProfile.php?upload-failed");
            }
        } else {

            $msg = "alert-danger";
            // alert
            $_SESSION['status'] = "Select an image to upload! Try again.";
            $_SESSION['status_code'] = "error";
            header("location: ../UserProfile.php?upload-failed");
        }
    }
}
// update farm pictures
else if (isset($_POST['UpdateFarmPhotos'])) {


    $errors = array();
    $uploadedFiles = array();
    $extension = array("jpeg", "jpg", "png", "PNG", "gif");
    $bytes = 1024;
    $KB = 1024;
    $totalBytes = $bytes * $KB;
    $UploadFolder = "../assets/uploads/farmer/farms/";
    $farmerCode = $_SESSION['farmerCode'];
    $counter = 0;

    // check if database already have 5 photos
    $sql = "SELECT * FROM farm_images WHERE farmerCode = '$farmerCode'";
    $result = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($conn), E_USER_ERROR);

    // while($data = mysqli_fetch_assoc($result)){
    //     echo $data["name"];
    // }
    $row = mysqli_fetch_assoc($result);
    $rowcount = mysqli_num_rows($result);

    if ($rowcount > 0) {

        // alert
        $_SESSION['status'] = "Upload failed! You have already uploaded farm images! Please go back and remove them to upload new images.";
        $_SESSION['status_code'] = "warning";
        header("location: ../UserProfile.php?upload-failed");
    } else {

        // uploading code

        foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
            $temp = $_FILES["files"]["tmp_name"][$key];
            $name = $_FILES["files"]["name"][$key];
            $ImageName = time() . '-' . $_FILES["files"]["name"][$key];
            if (empty($temp)) {
                break;
            }

            $counter++;
            $UploadOk = true;

            if ($_FILES["files"]["size"][$key] > $totalBytes) {
                $UploadOk = false;
                array_push($errors, $ImageName . " file size is larger than the 1 MB.");
            }

            $ext = pathinfo($ImageName, PATHINFO_EXTENSION);
            if (in_array($ext, $extension) == false) {
                $UploadOk = false;
                array_push($errors, $ImageName . " is invalid file type.");
            }

            if (file_exists($UploadFolder . "/" . $ImageName) == true) {
                $UploadOk = false;
                array_push($errors, $ImageName . " file  already exists.");
            }

            if ($UploadOk == true) {
                // upload to database and server
                move_uploaded_file($temp, $UploadFolder . "/" . $ImageName);
                // $sql = "INSERT INTO farm_images WHERE farmerCode='$farmerCode', farmPic='$ImageName'";
                $sql = "INSERT INTO farm_images (farmerCode, farmPic) VALUES('$farmerCode','$ImageName')";

                if (mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($conn), E_USER_ERROR)) {
                    echo "<b>Uploaded files to database:</b>";
                } else {
                    echo "<b>Erro in Uploading files to database:</b>";
                }

                array_push($uploadedFiles, $ImageName);
            }
        }

        if ($counter > 0) {
            if (count($errors) > 0) {
                echo "<b>Errors:</b>";
                echo "<br/><ul>";
                foreach ($errors as $error) {
                    echo "<li>" . $error . "</li>";
                }
                echo "</ul><br/>";
            }

            if (count($uploadedFiles) > 0) {
                echo "<b>Uploaded Files:</b>";
                echo "<br/><ul>";
                foreach ($uploadedFiles as $fileName) {
                    echo "<li>" . $fileName . "</li>";
                }
                echo "</ul><br/>";

                echo count($uploadedFiles) . " file(s) are successfully uploaded.";
            }
        } else {

            // alert
            $_SESSION['status'] = "Error uploading! Please Select file(s) to upload.";
            $_SESSION['status_code'] = "error";
            header("location: ../UserProfile.php?update-failed");
        }
    }
}
// delete farm photos 
else if (isset($_POST['deleteFarmPhotos'])) {
    $farmerCode = $_SESSION['farmerCode'];
    $sql = "DELETE FROM farm_images WHERE farmerCode = '$farmerCode'";
    if (mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($conn), E_USER_ERROR)) {

        // alert
        $_SESSION['status'] = "You have successfully deleted your farm images from the database!";
        $_SESSION['status_code'] = "success";
        header("location: ../UserProfile.php?delete-success");
    } else {
        echo "<b>Erro in Uploading files to database:</b>";

        // alert
        $_SESSION['status'] = "Error deleting files from database! Try again.";
        $_SESSION['status_code'] = "error";
        header("location: ../UserProfile.php?delete-failed");
    }
}
