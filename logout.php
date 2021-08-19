<?php
if (isset($_POST['logout'])) {
    session_start();
    session_unset();
    session_destroy();

    session_start();
    // alert
    $_SESSION['status'] = "You have Logged out!";
    $_SESSION['status_code'] = "info";
    header("Location: index.php");
    exit();
}
