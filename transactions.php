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
  
  
   <?php

include "config.php"; // Using database connection file here
$var = $_SESSION['username'];?>

  <a href="user_home.php">Home</a>

  <a class="active href="transactions.php">Transactions</a>;
  <a href="transfer.php">Transfer</a>;
  <a href="logout.php">Logout</a>

</div>

<h2>Account Details</h2>

<center>

<table class="center">
  <tr style="text-align:center;">
    <th style="text-align:center;">Date</th>
    <th style="text-align:center;">Details</th>
    <th style="text-align:center;">Amount</th>
    <th></th>
  </tr>
  <?php

include "config.php"; // Using database connection file here

$sql = "select *from transactions"; 

$result = mysqli_query($con, $sql);
// $records = mysqli_query($db_name,"select * from transactions"); // fetch data from database

while($data = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><?php echo $data['date']; ?></td>
    <!-- if($data['type'] as "deposit")
    { -->
      <td>Transfer from <?php echo $data['account_number']; ?>/<?php echo $data['user']; ?></td>
    <!-- } -->
    <td><?php echo $data['amount']; ?></td>
    <td><?php if($data['type']=="deposit") echo "+";
    else echo "-";?></td>
  </tr> 
<?php
}
?>


</table>

</body>
</html>

