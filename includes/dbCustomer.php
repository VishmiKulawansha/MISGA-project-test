
<?php
session_start();
try {
    include_once 'dbcon.php';

    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }

    if (isset($_POST['Register'])) {
        $fullName = $_POST['fullName'];
        $address = $_POST['address'];
        $teleNumber = $_POST['teleNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql_query = "INSERT INTO customer (fullName,address,teleNumber,email,password)
        VALUES ('$fullName' , '$address' , '$teleNumber' , '$email' , '$password');";

        if (mysqli_query($conn, $sql_query)) {
            // echo "New customer added successfully !";

            // alert
            $_SESSION['status'] = "New customer added successfully";
            $_SESSION['status_code'] = "success";
            header("location: ../logCustomer.php?user-added");
        } else {
            echo "Error" . $sql . "" . mysqli_error($conn);
            // alert
            $_SESSION['status'] = "Error adding customer! try again";
            $_SESSION['status_code'] = "error";
            header("location: ../logCustomer.php?user-adding-failed");
        }
        mysqli_close($conn);
    }
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

?>

