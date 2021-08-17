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
}
