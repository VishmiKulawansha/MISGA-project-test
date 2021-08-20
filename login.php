<?php
session_start();
include 'includes/head.php';
include 'navbar.php';
include 'includes/r_l-header.php';
include 'includes/JS.php';
?>

<div class="w3-container w3-center w3-animate-zoom">
    <div class="container">
        <div class="col-md-12 mt-5 text-center">
            <a href="logCustomer.php" class="btn btn-primary btn-lg" target="blank">CUSTOMER LOGIN</a>
            <p><br></p>
        </div>
        <div class="col-md-12 mt-5 text-center">
            <a href="logFarmer.php" class="btn btn-primary btn-lg" target="blank">&nbsp;&nbsp;&nbsp;&nbsp;FARMER LOGIN&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <P><BR></P>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>