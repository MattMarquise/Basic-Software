<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="stylesheet" href="software.css"/>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap4-alpha3.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/no-ui-slider/nouislider.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/economy-dashboard/styles.css"/>
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css"/>
    
		<!-- Scripts -->
		<script type="text/javascript" src="assets/jquery/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		<script type="text/javascript" src="assets/tether/tether.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/bootstrap4-alpha3.min.js"></script>
		<script type="text/javascript" src="assets/economy-dashboard/economy-dashboard-data.js"></script>
		<script type="text/javascript" src="assets/no-ui-slider/nouislider.min.js"></script>
		<script type="text/javascript" src="assets/economy-dashboard/economy-dashboard.js"></script>
  <body>
    <link rel="stylesheet" type="text/css" href="software.css"/>
    <nav>
      <a href="welcome.php">Home</a>
      <a href="ordersArchive.php">Orders</a>
      <a href="customersInfo.php">Customers</a>
      <a href="reset-password.php">Password Reset</a>
      <a href="logout.php">Logout</a>
    </nav>
    <div class="page-header">
      <link rel="stylesheet" href="software.css"/>
      <!-- Number Of Orders Listed -->
          <h1 style="color: #000000"><b><?php echo ($_SESSION["username"]); ?></b></h1>
    </div>
  </body>
</html>