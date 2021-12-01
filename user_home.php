<?php
session_start();
if(!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
    header("Location: login.php");
    die();
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home_page.css">

</head>
<body>
<div class="sidebar">
  
  
   <!-- header('Location:/try/' .$username . '.php');  -->
   <?php

include "config.php"; // Using database connection file here
$var = $_SESSION['username'];?>
  
  <a class="active" href="user_home.php">Home</a>

  <a href="transactions.php">Transactions</a>;
  <a href="transfer.php">Transfer</a>;
  <a href="logout.php">Logout</a>


</div>

<h2>Account Details</h2>
<center>

<table class="center">
  <tr>
    <th>Account Number</th>
    <th>Account Balance</th>
  </tr>

<tr>
  <td>
<?php

include "config.php"; // Using database connection file here
$var = $_SESSION['username'];

// echo $var;
$sql = "select *from users where user = '$var'"; 
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

echo $row['account_number'];?></td>

 <td>
<?php

include "config.php"; // Using database connection file here
$var = $_SESSION['username'];

// echo $var;
$sql = "select *from users where user = '$var'"; 
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

echo $row['balance'];?></td>


</tr>
</table>

</body>
</html>