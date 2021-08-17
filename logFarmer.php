<?php
include 'includes/head.php';
include 'navbar.php';
include 'includes/header.php';
include 'includes/JS.php';
?>

<section class="container">
    <div class="box-3" style="background-image: url('assets/img/bg.jpg');">
        <div class="card card-login mb-5">
            <div class="card-body">
                <form class="form-horizontal" action="includes/scripts.php" method="POST">
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="farmer code" name="farmerCode">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <div class="checkbox">
                                <input id="checkbox0" type="checkbox" name="remember">
                                <label for="checkbox0" class="mb-0"> Remember Me? </label>
                            </div>
                            <a href="login.php" class="text-light"><i class="fa fa-bell"></i> Forgot password?</a>
                        </div>
                    </div>
                    <div class="form-group row text-center mt-4">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase" name="logFarmer">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>