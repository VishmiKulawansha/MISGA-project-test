<?php
include 'includes/head.php';
include 'navbar.php';
include 'includes/r_l-header.php';
include 'includes/JS.php';
?>
<div class="w3-container w3-center w3-animate-zoom">
    <p><br></p>
    <p class="text-1">CUSTOMER REGISTRATION</p>
    <div class="container">
        <div class="card card-login mb-5">
            <div class="card-body">
                <form class="form-horizontal" name="customer_registration" action="includes/dbCustomer.php" method="POST">
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Full Name" name="fullName">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Address of delivery" name="address">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="phone" required="" placeholder="Whatsapp Number" name="teleNumber">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <input class="form-control" type="email" required="" placeholder="user@gmail.com" name="email">
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
                        <br />
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input id="checkbox0" type="checkbox" name="terms">
                                    <label for="checkbox0" class="mb-0"> <a href="terms.php" class="text-light">I Agree with Terms & Conditions</a> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row text-center mt-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary text-uppercase" name="Register">Register</button>
                            </div>
                            <br> </br>

                            <div>
                                &emsp;&ensp;Already a member? <a href="logCustomer.php">Sign in</a></div>

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