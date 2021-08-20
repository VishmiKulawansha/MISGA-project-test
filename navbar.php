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
                        if (isset($_SESSION['user_type'])) {
                            if ($_SESSION['user_type'] == "customer") {
                                echo '<li class="nav-item">
                                <a href="shop.php" class="nav-link">Shop Now</a>
                            </li>';
                            } else {
                                echo '<li class="nav-item">
                                <a href="" class="nav-link">Sell</a>
                            </li>';
                            }
                        } else {
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

                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="
                                <?php
                                // DISPLAY USER PROFILE IMAGE

                                if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == "farmer") {
                                    echo 'assets\uploads\farmer\profile\\' . $_SESSION['profilePic'];
                                } else if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == "customer") {
                                    echo 'assets\uploads\customer\profile\\' . $_SESSION['profilePic'];
                                } else {
                                    echo 'https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png';
                                }
                                ?>
                                "></div>

                                &nbsp;|&nbsp;
                                <?php
                                if (isset($_SESSION['login_user'])) {
                                    $user =  $_SESSION['login_user'];
                                    echo '<span class="d-none d-lg-inline mr-2 text-gray-600 small">' . "" . $_SESSION['login_user'] . '</span>';
                                }
                                ?>
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

                                <button type="button" class="dropdown-item" name="adminLogin" data-toggle="modal" data-target="#adminModal">
                                    <i class="fas fa-cogs"></i>&nbsp;&nbsp;&nbsp;Admin
                                </button>

                                <form action="logout.php" method="POST">
                                    <button type="submit" class="dropdown-item" name="logout">
                                        <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;Logout
                                    </button>
                                </form>

                            </div>
                        </li>


                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <!-- Admin Login Modal-->
    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Enter your admin username and password to continue.
                    <!--admin login form -->
                    <form class="form-horizontal" action="includes/scripts.php" method="POST">
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <input class="form-control" type="text" required="" placeholder="username" name="userName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="logAdmin">Login</button>

                </div>
                </form>
            </div>
        </div>
    </div>