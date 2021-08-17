<?php
session_start();
include 'includes/head.php';
include 'navbar.php';
include 'includes/header.php';
include 'includes/JS.php';
?>

<section class="container">
    <div class="box-3" style="background-image: url('assets/img/bg.jpg');">
        <div class="col-md-12 mt-5 text-center">
            <a href="logCustomer.php" class="btn btn-primary btn-lg" target="blank">CUSTOMER LOGIN</a>
            <p><br></p>
        </div>
        <div class="col-md-12 mt-5 text-center">
            <a href="logFarmer.php" class="btn btn-primary btn-lg" target="blank">&nbsp;&nbsp;&nbsp;&nbsp;FARMER LOGIN&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <p><br></p>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>