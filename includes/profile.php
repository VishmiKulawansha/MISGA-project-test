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
    // submit Password
} elseif (isset($_POST['submitPassword'])) {

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
