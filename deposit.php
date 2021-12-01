<?php    
session_start();

    include('config.php');  
    $user = $_POST['user'];  
    $account =  $_POST['account']; 
    $amount = $_POST['amount']; 


   
   $sql = "UPDATE users SET balance=balance+$amount WHERE account_number=$account";
   // $sql2 = "UPDATE users SET balance=balance-$amount WHERE user=$account2";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('Location:admin_home.php');
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?>
