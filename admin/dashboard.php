<?php
session_start();

// prevent unauthorized access
if (!isset($_SESSION['user_type'])) {
    header("location: ../login.php?invalid-login");
}

include '../includes/dbcon.php';
include '../includes/alert.php';

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
// get all data from Items table
$sql = "SELECT * FROM items ORDER BY id DESC ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KRISH VILLA - Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="../assets/fonts/font-awesome/font-awesome.css">
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KRISH VILLA</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Inventory
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="#" data-toggle="modal" data-target="">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Add Stock Items</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link " href="#prodTable">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Table</span>
                </a>

            </li>





            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>



                    <!-- Content Row -->

                    <div class="row">



                    </div>

                    <!-- new row -->
                    <div class="row">
                        <div class="col-xl-6 col-md-12 mb-4">
                            <!-- inner col-1 -->
                            <div class="row">
                                <div class="col-xl-6 col-md-12 mb-4">
                                    <!-- Earnings (Monthly) Card Example -->

                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                        Total stock of Vegetables (Kg)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                        <!-- vegitables -->
                                                        <?php
                                                        $sql3 = "SELECT sum(stockQty) as total FROM items WHERE itemType='Vegetables' ";
                                                        $result3 = mysqli_query($conn, $sql3);
                                                        $veg = mysqli_fetch_assoc($result3);
                                                        echo $veg['total']." Kg";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-carrot fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12 mb-4 ">
                                    <!-- Earnings (Monthly) Card Example -->

                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Total stock of fruits (Kg)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <!-- fruits -->
                                                        <?php
                                                        $sql4 = "SELECT sum(stockQty) as total FROM items WHERE itemType='fruits' ";
                                                        $result4 = mysqli_query($conn, $sql4);
                                                        $fruits = mysqli_fetch_assoc($result4);
                                                        echo $fruits['total']." Kg";
                                                        ?>

                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-apple-alt fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-12 mb-4">
                                    <!-- Earnings (Monthly) Card Example -->

                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Wastage (%)
                                                    </div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                                <!-- wastage percentage -->
                                                                <?php
                                                                $sql2 = "SELECT sum(wastage) as waste, sum(stockQty) as qty FROM items  ";
                                                                $result2 = mysqli_query($conn, $sql2);
                                                                $data = mysqli_fetch_assoc($result2);
                                                                $wasteP = $data['waste'] / $data['qty'] * 100;
                                                                $wastePFloat =  number_format((float)$wasteP, 2, '.', '');
                                                                echo number_format((float)$wastePFloat, 2, '.', '') . "%";


                                                                echo '
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: ' . $wastePFloat . '%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            ';

                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-trash fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-12 mb-4">
                                        <!-- Pending Requests Card Example -->

                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                            Total stock of leaves (Kg)</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                            <!-- leaves -->
                                                            <?php
                                                            $sql5 = "SELECT sum(stockQty) as total FROM items WHERE itemType='Leaves' ";
                                                            $result5 = mysqli_query($conn, $sql5);
                                                            $Leaves = mysqli_fetch_assoc($result5);
                                                            echo $Leaves['total']." Kg";
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-leaf fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12 mb-4">
                                <!-- Pie Chart -->

                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total of Item types</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Fruits
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-warning"></i> Leaves
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Vegitables
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <!-- DataTable products -->
                        <section id="prodTable">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h5 class="m-0 font-weight-bold text-primary">Products</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>item</th>
                                                    <th>Item Type</th>
                                                    <th>stock Qty. (kg)</th>
                                                    <th>Wastage (kg)</th>
                                                    <th>Selling Price(Rs)</th>
                                                    <th>Buying Price(Rs)</th>


                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>item</th>
                                                    <th>Item Type</th>
                                                    <th>stock Qty. (kg)</th>
                                                    <th>Wastage (kg)</th>
                                                    <th>Selling Price(Rs)</th>
                                                    <th>Buying Price(Rs)</th>

                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <!-- fill data from database to table -->
                                                <?php

                                                while ($row = mysqli_fetch_array($result)) {

                                                    echo '
                                            <tr>
                                                <td>' . $row['id'] . '  </td>
                                                <td>' . $row['pname'] . '</td>
                                                <td>' . $row['itemType'] . '</td>
                                                <td>' . $row['stockQty'] . '</td>
                                                <td>' . $row['wastage'] . '</td>
                                                <td>' . $row['sellPrice'] . '</td>
                                                <td>' . $row['buyPrice'] . '</td>
                                            
                                            </tr>
                                                ';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </section>


                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; MISGA | 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to sign out as admin.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="../logout.php" method="POST">
                            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- admin form modals -->
        <?php
        include 'adminforms.php';
        ?>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <?php include 'charts.php'; ?>


        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>