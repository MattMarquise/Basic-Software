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
      <title>Orders Archive</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <style type="text/css">
          body{ font: 14px sans-serif; text-align: center; }
      </style>

  <!--Two Containers-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="software.css">
  <link rel="stylesheet" href="software.css">

  <body>

  <!--NAV-->
  <link rel="stylesheet" type="text/css" href="software.css"/>
    <nav>
      <a href="welcome.php">Home</a>
      <a href="ordersArchive.php">Orders</a>
      <a href="customersInfo.php">Customers</a>
      <a href="reset-password.php">Password Reset</a>
      <a href="logout.php">Logout</a>
    </nav>

  <!--Header-->
  <body>
      <div class="page-header">
          <h1 style="color: #000000">Orders Archive</h1>
      </div>
  </body>
  <body>
    <div>  
      <h2 style="color: #000000">Want To Create A New Invoice?</h2>
      <a href="addOrder.php" style="color: #000000">Add Order</a>
    </div>  

    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 2px solid #FFEA00;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
    <h2 style="color: #000000">Orders</h2>

    <br><br>
    <style>
      span.a {
        background-color: #FFEA00;
        width: 30px;
        padding: 10px;
        margin: 20px;
      }
    </style>
  </head>

<!-- Number Of Orders Listed -->
<span class="a"> Number Of Orders Listed:
  <strong>
  </strong>
</span>

<!-- Price Of Orders Listed -->
<span class="a">Price Of Orders Listed:
  <strong>total</strong>
</span>

<br><br><br><br>
<!-- Search Bar -->
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by name...">
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

<br><br>
<table id="myTable">
  <tr>
    <th>Customer/Business Name</td>
    <th>Email</th>
    <th>Product Ordered</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Date Added</th>
  </tr>

<?php
// Create Conn
$conn = mysqli_connect("localhost", "User", "password", "database");

// Check Conn
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["customerName"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["orderInfo"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["price"]. "</td><td>" . $row["dateAdded"]. "</td></tr>";
}

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>



</table>
</body>
</body>
</html>