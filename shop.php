<?php
session_start();
include 'includes/dbcon.php';
include 'includes/alert.php';


if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;

            // alert
            $_SESSION['status'] = "item added";
            $_SESSION['status_code'] = "info";

            header("location: shop.php?added");
        } else {
            // echo '<script>alert("Product is already Added to Cart")</script>';
            // echo '<script>window.location="manage.php"</script>';
              // alert
              $_SESSION['status'] = "item already added";
              $_SESSION['status_code'] = "danger";
  
              header("location: shop.php?added");
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="manage.php"</script>';
            }
        }
    }
}
?>

<?php
include 'includes/head.php';
// include 'navbar.php';
?>
<!-- header start -->
<div class="page-content page-bg header" style="background-color: #d2d9da;">
    <div>
        <a class="btn-primary " style="text-align:left;" href="index.php"> back</a>
        <a class="btn-primary " style="text-align:left;" href="manage.php"> manage</a>

    </div>
    <div class="header-bg jumbotron-bg jumbotron page-bg" style="background-image: url('assets/img/header.jpg'); height: auto;">

        <div class="text-head">
            <div class="w3-container w3-center w3-animate-zoom">
                <p class="text-3">KRISH VILLA</p>
                <p class="header-2">Live Organic For Live Healthy</p>
                <p style="font-size: 10%;"> &nbsp;</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-1">
                        <a href="https://www.facebook.com/" role="button">
                            <i style="color:#0006f2 ;" class="fab fa-facebook f"></i>
                        </a>
                    </div>

                    <div class="col-md-1">
                        <a href="https://ads.twitter.com/login" role="button">
                            <i style="color: #009ce4 ;" class="fab fa-twitter f"></i>
                        </a>
                    </div>

                    <div class="col-md-1">
                        <a href="https://myaccount.google.com/?utm_source=sign_in_no_continue" role="button">
                            <i style="color: #e40000;" class="fab fa-google f"></i>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="https://www.facebook.com/" role="button">
                            <i style="color:#16dc16 ;" class="fab fa-whatsapp f"></i>
                        </a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-bg">

    <!-- header end -->

    <?php
    // include 'includes/JS.php';
    ?>




    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <style>
        .product {
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        table,
        th,
        tr {
            text-align: center;
        }

        .title2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        h2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        table th {
            background-color: #efefef;
        }

        .btn-grad {
            background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%)
        }

        .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
        }

        .btn-grad:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
    </style>



    <div class="container" style="width: 80%">
        <h2>Shopping Cart</h2>
        <h1 class="btn-grad"> vegetables</h1><br><br><br>
        <?php
        $query = "SELECT * FROM items WHERE itemType='Vegetables' ORDER BY id ASC ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

        ?>
                <div class="col-md-3">

                    <form method="post" action="manage.php?action=add&id=<?php echo $row["id"]; ?>">

                        <div class="product">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                            <h5 class="text-info"><?php echo $row["quantity"]; ?></h5>
                            <h5 class="text-danger">LKR<?php echo $row["sellPrice"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["sellPrice"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
    </div>


    <br><br>
    <div class="container" style="width: 80%">

        <h1 class="btn-grad"> Fruits</h1><br><br><br>
        <?php
        $query = "SELECT * FROM items  WHERE itemType='Fruits' ORDER BY id ASC ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

        ?>
                <div class="col-md-3">

                    <form method="post" action="manage.php?action=add&id=<?php echo $row["id"]; ?>">

                        <div class="product">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                            <h5 class="text-info"><?php echo $row["quantity"]; ?></h5>
                            <h5 class="text-danger">LKR<?php echo $row["sellPrice"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["sellPrice"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
    </div>


    <br><br>
    <div class="container" style="width: 80%">

        <h1 class="btn-grad"> Green Leaves</h1><br><br><br>
        <?php
        $query = "SELECT * FROM items   WHERE itemType='Leaves'ORDER BY id ASC ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

        ?>
                <div class="col-md-3">

                    <form method="post" action="manage.php?action=add&id=<?php echo $row["id"]; ?>">

                        <div class="product">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                            <h5 class="text-info"><?php echo $row["quantity"]; ?></h5>
                            <h5 class="text-danger">LKR<?php echo $row["sellPrice"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["sellPrice"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
    </div>










    <?php
    include 'includes/footer.php';
    ?>

    </html>