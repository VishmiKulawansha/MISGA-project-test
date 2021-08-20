<?php
session_start();

try {
   include_once 'dbcon.php';

   if (!$conn) {
      die("Connection Failed" . mysqli_connect_error());
   }

   // FARMER LOGIN

   if (isset($_POST['logFarmer'])) {

      // Get the Posted Informations and assigned them to the local variables
      $farmerCode = mysqli_real_escape_string($conn, $_POST['farmerCode']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      //error handlers
      //check if inputs are empty
      if (empty($farmerCode) || empty($password)) {
         header("Location:../shop.php?Login-empty");
         exit();
      } else {
         // Set the query String
         $sql = "SELECT * FROM farmer WHERE farmerCode = $farmerCode AND password  = $password";
         $result = mysqli_query($conn, $sql);

         $row = mysqli_fetch_assoc($result);

         $count = mysqli_num_rows($result);
         // echo $count;
         // echo $result;
         // If result matched $myusername and $mypassword, table row must be 1 row

         if ($count == 1) {
            session_unset();
            $_SESSION['user_type'] = "farmer";
            $_SESSION['login_user'] = $farmerCode;
            $_SESSION['name'] = $row['fullName'];
            $_SESSION['farmName'] = $row['farmName'];
            $_SESSION['address'] = $row['farmAddress'];
            $_SESSION['farmArea'] = $row['farmArea'];
            $_SESSION['telephone'] = $row['teleNumber'];
            $_SESSION['farmerCode'] = $farmerCode;
            $_SESSION['profilePic'] = $row['profilePic'];

            // alert
            $_SESSION['status'] = "Login Successful!";
            $_SESSION['status_code'] = "success";

            header("location: ../userProfile.php");
         } else {

            // alert
            $_SESSION['status'] = "Login Failed!";
            $_SESSION['status_code'] = "error";
            header("location: ../login.php?invalid-email-or-passowrd");
         }
         mysqli_close($conn);
      }
   }

   //  CUSTOMER LOGIN

   // Check if this form was submitted
   if (isset($_POST['logCustomer'])) {

      // Get the Posted Informations and assigned them to the local variables
      $email = ($_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      //error handlers
      //check if inputs are empty
      if (empty($email) || empty($password)) {
         header("Location:../shop.php?Login-empty");
         exit();
      } else {
         // Set the query String
         $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
         $result = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($conn), E_USER_ERROR);

         // while($data = mysqli_fetch_assoc($result)){
         //     echo $data["name"];
         // }
         $row = mysqli_fetch_assoc($result);

         $count = mysqli_num_rows($result);
         // echo $count;
         // echo $result;
         // If result matched $myusername and $mypassword, table row must be 1 row

         if ($count == 1) {
            // Create session data
            session_unset();
            $_SESSION['user_type'] = "customer";
            $_SESSION['login_user'] = $email;
            $_SESSION['telephone'] = $row['teleNumber'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['name'] = $row['fullName'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['profilePic'] = $row['profilePic'];

            // alert
            $_SESSION['status'] = "Login Successfull!";
            $_SESSION['status_code'] = "success";
            header("location: ../shop.php");
         } else {
            // alert
            $_SESSION['status'] = "Login Failed!";
            $_SESSION['status_code'] = "error";

            header("location: ../login.php?invalid-email-or-password");
         }
         mysqli_close($conn);
      }
   }
   if (isset($_POST['logAdmin'])) {

      // Get the Posted Informations and assigned them to the local variables
      $userName = ($_POST['userName']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      //error handlers
      //check if inputs are empty
      if (empty($userName) || empty($password)) {
         header("Location:../login.php?Login-empty");
         exit();
      } else {
         // Set the query String
         $sql = "SELECT * FROM admin WHERE userName = '$userName' AND password = '$password'";
         $result = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($conn), E_USER_ERROR);

         $row = mysqli_fetch_assoc($result);

         $count = mysqli_num_rows($result);

         // If result matched $myusername and $mypassword, table row must be 1 row

         if ($count == 1) {
            // Create session data
            session_unset();
            $_SESSION['user_type'] = "admin";
            $_SESSION['login_user'] = $userName;
            $_SESSION['userName'] = $row['userName'];

            // alert
            $_SESSION['status'] = "Login Successfull!";
            $_SESSION['status_code'] = "success";
            header("location: ../admin/dashboard.php");
         } else {
            // alert
            $_SESSION['status'] = "Login Failed!";
            $_SESSION['status_code'] = "error";

            header("location: ../login.php?invalid-userName-or-password");
         }
         mysqli_close($conn);
      }
   }
} catch (Exception $e) {
   echo $e;
}
