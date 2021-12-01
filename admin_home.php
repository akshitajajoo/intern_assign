<?php
session_start();

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
  
  <a class="active" href="admin_home.php">Home</a>

  <a href="lists_of_users.php">Users</a>;
  <a href="credit_debit.php">Credit/Debit</a>;
  <a href="logout.php">Logout</a>


</div>

<h2>Admin Side Page</h2>
<center>

<table class="center">
  <tr>
    <th>Total amount deposited in the bank</th>
    <th>Total Users</th>
  </tr>

<tr>
  <td>
<?php

include "config.php"; // Using database connection file here
$var = $_SESSION['username'];


// echo $var;
$sql = "select *from users"; 
$result = mysqli_query($con, $sql);

$qty=0;
while($num = mysqli_fetch_assoc ($result)) {
    $qty += $num['balance'];
}
echo $qty;
/*$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

echo $row['account_number'];*/?></td>

 <td>
<?php

include "config.php"; // Using database connection file here
$var = $_SESSION['username'];

// echo $var;
$sql = "select *from users"; 
$result = mysqli_query($con, $sql);

$qty=0;
while($num = mysqli_fetch_assoc ($result)) {
    $qty += 1;
}
echo $qty-1;

/*$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

echo $row['balance'];*/?></td>


</tr>
</table>

</body>
</html>