<body>
    <div class="page-header nav-b">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark nav-b" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo/logoNew.png" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <?php
                        if(isset($_SESSION['user_type'])) {
                            if($_SESSION['user_type'] == "customer") {
                                echo '<li class="nav-item">
                                <a href="shop.php" class="nav-link">Shop Now</a>
                            </li>';
                            }
                            else {
                                echo '<li class="nav-item">
                                <a href="sell.php" class="nav-link">Sell</a>
                            </li>';
                            }    
                        }else {
                            echo '<li class="nav-item">
                            <a href="shop.php" class="nav-link">Shop Now</a>
                        </li>';  
                        }
                        
                        ?>
                        <li class="nav-item">
                            <a href="about-us.php" class="nav-link ">About-Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact-us.php" class="nav-link">Contact-Us</a>
                        </li>

<!-- navbar shop -->
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary"></span>
                            </a>
                            <div class="dropdown-menu shopping-cart">
                                <ul>
                                    <li>
                                        <div class="drop-title">Your Cart</div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-list">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/avatar.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">Rp. 700.000</span>
                                                        <span>Rp. 100.000</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/avatar.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">Rp. 700.000</span>
                                                        <span>Rp. 100.000</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/avatar.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">Rp. 700.000</span>
                                                        <span>Rp. 100.000</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/avatar.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">Rp. 700.000</span>
                                                        <span>Rp. 100.000</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drop-title d-flex justify-content-between">
                                            <span>Total:</span>
                                            <span class="text-primary"><strong>Rp. 2000.000</strong></span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                        <a href="cart.php" class="btn btn-secondary">View Cart</a>
                                        <a href="checkout.php" class="btn btn-primary">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="assets/img/logo/avatar.jpg"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="userProfile.php" class="dropdown-item">
                                    <i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Profile
                                </a>
                                <a href="register.php" class="dropdown-item">
                                    <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Register
                                </a>
                                <form action="login.php" method="POST">
                                    <button type="submit" class="dropdown-item" name="login">
                                        <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Login
                                    </button>
                                </form>
                                <form action="logout.php" method="POST">
                                    <button type="submit" class="dropdown-item" name="logout">
                                        <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;Logout
                                    </button>
                                </form>

                            </div>
                        </li>
                        <li class="nav-item">
                            <div class=" text-dark "> <?php
                                                        if (isset($_SESSION['login_user'])) {
                                                            $user =  $_SESSION['login_user'];
                                                            echo '<span class="d-none d-lg-inline mr-2 text-gray-600 small">' . "" . $_SESSION['login_user'] . " | " . '</span>';
                                                        }



                                                        ?> </div>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </div>