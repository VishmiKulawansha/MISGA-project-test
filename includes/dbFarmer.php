
<?php

try {
    include_once 'dbcon.php';

    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }

    if (isset($_POST['Register'])) {
        $fullName = $_POST['fullName'];
        $farmerCode = $_POST['farmerCode'];
        $farmName = $_POST['farmName'];
        $farmAddress = $_POST['farmAddress'];
        $farmArea = $_POST['farmArea'];
        $teleNumber = $_POST['teleNumber'];
        $password = $_POST['password'];

        $sql_query = "INSERT INTO farmer (fullName,farmerCode,farmName,farmAddress,farmArea,teleNumber,password)
        VALUES ('$fullName' , '$farmerCode' , '$farmName' , '$farmAddress' , '$farmArea' , '$teleNumber' , '$password');";

        if (mysqli_query($conn, $sql_query)) {
            // echo "New farmer  added successfully !";
            echo '<script>alert("New farmer added successfully !")</script>';

            header("Location:../logFarmer.php");
        } else {
            echo "Error" . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}


?>