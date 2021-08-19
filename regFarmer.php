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
                <form class="form-horizontal" name="farmer_registration" action="includes/dbFarmer.php" method="POST">
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="User Name" name="fullName">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Farmer Code" name="farmerCode">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Name of the Farm (if any)" name="farmName">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Address of Farm" name="farmAddress">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Area of Farm (in Perches)" name="farmArea">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Telephone Number" name="teleNumber">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input class="form-control" type="password" required="" placeholder="Confirm Password" name="password">
                        </div>
                    </div>
                    <div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input id="checkbox0" type="checkbox" name="terms">
                                    <label for="checkbox0" class="mb-0"><a href="terms.php" class="text-light">I Agree with Terms & Conditions</a> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row text-center mt-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="Register">Register</button>
                            </div>
                            <br> </br>

                            <div>
                                &emsp;&ensp;Already a member? <a href="logFarmer.php">Sign in</a></div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>