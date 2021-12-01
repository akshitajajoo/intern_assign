<?php    
session_start();

    include('config.php');  
    $name = $_POST['Name'];  
    $account =  $_POST['Account_Number']; 
    $amount = $_POST['Balance']; 

    $sql = "INSERT INTO users (id,user,pass, account_number ,amount,type) VALUES('3','$name','123466,'$account','$amount','user')";
   
   
   // $sql = "UPDATE users SET balance=balance+$amount WHERE account_number=$account";
   // $sql2 = "UPDATE users SET balance=balance-$amount WHERE user=$account2";

if ($con->query($sql) === TRUE) {
  alert("Record updated successfully");
  // header('Location:lists_of_users.php');
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?>
