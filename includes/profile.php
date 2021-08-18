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
        //  ALERT AND GO BACK PREVIOUS PAGE
        echo '<script>';
        echo 'if (window.confirm("User Details updated! \n Go back to previous page?"))
        {
            // They clicked Yes
           window.history.back();
        }
        else
        {
            // They clicked no
            window.history.back();
        }';
        echo '</script> ';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    // submit customer Password
} else if (isset($_POST['submitCusPassword'])) {

    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $email = $_SESSION['login_user'];

    $queryPassword = "UPDATE customer SET password= '$newPass' WHERE email='$email'";
    if (mysqli_query($conn, $queryPassword)) {

        //  ALERT AND GO BACK PREVIOUS PAGE
        echo '<script>';
        echo 'if (window.confirm("Password updated! \n Go back to previous page?"))
        {
            // They clicked Yes
            window.history.back();
        }
        else
        {
            // They clicked no
            window.history.back();
        }';
        echo '</script> ';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
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

        //  ALERT AND GO BACK PREVIOUS PAGE
        echo '<script>';
        echo 'if (window.confirm("Farmer Details updated! \n Go back to previous page?"))
        {
            // They clicked Yes
           window.history.back();
        }
        else
        {
            // They clicked no
            window.history.back();
        }';
        echo '</script> ';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
// submit Farmer Password
else if (isset($_POST['submitFarPassword'])) {

    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];
    $farmerCode = $_SESSION['login_user'];

    $queryPassword = "UPDATE farmer SET password= '$newPass' WHERE farmerCode='$farmerCode'";
    if (mysqli_query($conn, $queryPassword)) {

        //  ALERT AND GO BACK PREVIOUS PAGE
        echo '<script>';
        echo 'if (window.confirm("Password updated! \n Go back to previous page?"))
        {
            // They clicked Yes
            window.history.back();
        }
        else
        {
            // They clicked no
            window.history.back();
        }';
        echo '</script> ';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else if (isset($_POST['UpdateProfilePic'])) {
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
        echo  "Image size should not be greater than 2000Kb";
        $msg_class = "alert-danger";
    }
    // check if file exists
    if (file_exists($target_file)) {
        echo "File already exists";
        $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
        if (move_uploaded_file($_FILES["profile-image-upload"]["tmp_name"], $target_file)) {

            if (mysqli_query($conn, $sql)) {
                $_SESSION['profilePic'] =  $profileImageName;
                echo "Image uploaded and saved in the Database";
                $msg_class = "alert-success";
            } else {
                echo "There was an error in the database";
                $msg_class = "alert-danger";
            }
        } else {
            echo "There was an erro uploading the file";
            $msg = "alert-danger";
        }
    }
}
