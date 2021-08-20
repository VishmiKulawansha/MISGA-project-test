<?php
session_start();

// prevent unauthorized access
if (!isset($_SESSION['user_type'])) {
    header("location: login.php?invalid-login");
}
include 'includes/dbcon.php';
include 'includes/head.php';
include 'navbar.php';
include 'includes/r_l-header.php';
include 'includes/JS.php';
?>
<div class="w3-container w3-center w3-animate-zoom">
    <div class="container center">
        <div class="container-fluid">
            <h3 class="text-dark mb-6">Profile </h3>
            <div class="col-lg-12">
                <div class="card ">
                    <div class="profile-pic center">
                        <form id="formUpdateProfilePic" class="formUpdateProfilePic" method="POST" action="includes/profile.php" enctype="multipart/form-data">
                            <img alt="User Pic" class="rounded-circle p-2" src=" 
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
                         " id="profile-image1" height="200">
                            <input id="profile-image-upload" name="profile-image-upload" class="hidden" type="file" onchange="previewFile()">

                            <button class="btn btn-primary btn-sm" type="submit" id="UpdateProfilePic" name="UpdateProfilePic">Submit</button>
                            <div style="color:#999;"> <br> </div>
                    </div>
                    </form>
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">User Details</p>
                                </div>
                                <div class="card-body">

                                    <!-- FARMER / CUSTOMER UPDATE FORM -->
                                    <?php
                                    if (isset($_SESSION['user_type'])) {
                                        // FARMER CODE
                                        if ($_SESSION['user_type'] == "farmer") {

                                            echo '<form id="formUserDetails" class="formUserDetails" method="post" action="includes/profile.php">
                                     <div class="form-row">
                                         <div class="col">
                                             <div class="form-group"><label for="fullName"><strong>Full Name</strong></label><input class="form-control" type="text" placeholder="Full Name" name="fullName" value="' . $_SESSION['name'] . '" required></div>
                                         </div>
                                         <div class="col">
                                             <div class="form-group"><label for="address"><strong>Farm Address</strong></label><input class="form-control" type="address" placeholder="Address" name="farmAddress" value="' . $_SESSION['address'] . '" required></div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col">
                                             <div class="form-group"><label for="teleNumber"><strong>Telephone Number</strong></label><input class="form-control" type="text" placeholder="Telephone Number" name="teleNumber" value="' . $_SESSION['telephone'] . '" required></div>
                                         </div>
                                         <div class="col">
                                             <div class="form-group"><label for="email"><strong>Farmer Code </strong></label><input class="form-control" type="text" placeholder="" name="farmerCode" value="' . $_SESSION['farmerCode'] . '" disabled></div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                     <div class="col">
                                         <div class="form-group"><label for="farmName"><strong>Farm Name</strong></label><input class="form-control" type="text" placeholder="Farm Name" name="farmName" value="' . $_SESSION['farmName'] . '" required></div>
                                     </div>
                                     <div class="col">
                                         <div class="form-group"><label for="farmArea"><strong>Farm Area </strong></label><input class="form-control" type="text" placeholder="" name="farmArea" value="' . $_SESSION['farmArea'] . '" ></div>
                                     </div>
                                 </div>
                                     <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" id="updateFarmer" name="updateFarmer">Save Changes</button></div>
                                 </form>
                                 </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Change Password</p>
                            </div>
                            <div class="card-body">
                            
                                <form id="formPassword" class="was-validated" method="post" action="includes/profile.php" oninput=\'confirmPass.setCustomValidity(confirmPass.value != newPass.value ?"Passwords do not match." : "")\'>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="address"><strong>New Password</strong></label><input class="form-control" type="password" id="newPass" name="newPass" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="address"><strong>Confirm Password</strong></label><input class="form-control" type="password" id="confirmPass" name="confirmPass" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="submitFarPassword">Save&nbsp;Changes</button></div>
                                </form>
                            </div>
                        </div>


                           

                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Upload Farm Photos</p>
                            </div>
                            <div class="card-body">
                            
                                <form id="formFarmPhotos" class="formFarmPhotos" method="post" action="includes/profile.php"  enctype="multipart/form-data" >
                                    <div class="form-row">
                                        <div class="col">
                                        <input id="profile-image-upload" name="files[]" class="hidden" multiple="multiple" type="file" onchange="previewFile()">
                                    </div>
                                        
                                        <div class="alert alert-info alert-dismissible fade show" style="margin-top: 5px;" role="alert">
                                        <strong>Please, Select only 5 images </strong>(.jpg, .jpeg, .png, .gif) to upload with less than 1MB each.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <button class="btn btn-danger btn-sm" type="submit" name="deleteFarmPhotos">delete&nbsp;photos</button>
                                    <button class="btn btn-primary btn-sm" type="submit" name="UpdateFarmPhotos">Save&nbsp;Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        </form>
                    </div>
                ';
                                        } else if ($_SESSION['user_type'] == "customer") {
                                            // CUSTOMER CODE
                                            echo '<form id="formUserDetails" class="formUserDetails" method="post" action="includes/profile.php">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="fullName"><strong>Full Name</strong></label><input class="form-control" type="text" placeholder="Full Name" name="fullName" value="' . $_SESSION['name'] . '" required></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="address" placeholder="Address" name="address" value="' . $_SESSION['address'] . '" required></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="teleNumber"><strong>Whatsapp Number</strong></label><input class="form-control" type="text" placeholder="Whatsapp Number" name="teleNumber" value="' . $_SESSION['telephone'] . '" required></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label for="email"><strong>Email </strong></label><input class="form-control" type="text" placeholder="user@gmail.com" name="email" value="' . $_SESSION['email'] . '" disabled></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" id="updateCustomer" name="updateCustomer">Save Changes</button></div>
                                    </form>
                                    
                                    </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Change Password</p>
                            </div>
                            <div class="card-body">
                                <form id="formPassword" class="was-validated" method="post" action="includes/profile.php" oninput=\'confirmPass.setCustomValidity(confirmPass.value != newPass.value ? "Passwords do not match." : "")\'>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="address"><strong>New Password</strong></label><input class="form-control" type="password" id="newPass" name="newPass" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="address"><strong>Confirm Password</strong></label><input class="form-control" type="password" id="confirmPass" name="confirmPass" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="submitCusPassword">Save&nbsp;Changes</button></div>
                                </form>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                                    ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include_once 'includes/footer.php';
    ?>

    </html>