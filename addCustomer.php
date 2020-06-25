<?php
// Initialize the session
session_start();
 
// Check if user is logged in, if not redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<body>

<!--NAV-->
<link rel="stylesheet" type="text/css" href="software.css"/>
  <nav>
		<a href="welcome.php">Home</a>
		<a href="ordersArchive.php">Orders Archive</a>
    <a href="customersInfo.php">Customer Info</a>
  	<a href="reset-password.php">Password Reset</a>
		<a href="logout.php">Logout</a>
	</nav>

    <div class="page-header">
        <h1>Add A Order</h1>
    </div>

<h2>Add Order</h2>
<br>

<!--HTML FOR FORM-->
<form action="customersInfo.php" method="post">
    <p>
        <label for="customerName">Customer/Business Name:</label>
        <input type="text" name="customerName" id="customerName">
    </p>
    <p>
        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="mailAddress">Mail To Address:</label>
        <input type="text" name="mailAddress" id="mailAddress">
    </p>
    <p>
        <label for="order">Order:</label>
        <input type="text" name="order" id="order">
    </p>
    <p>
        <label for="price">Price Amount:</label>
        <input type="text" name="price" id="price">
    </p>
    <p>
        <label for="dateAdded">Date Added:</label>
        <input type="text" name="dateAdded" id="dateAdded">
    </p>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>