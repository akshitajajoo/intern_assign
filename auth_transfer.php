<?php    
session_start();

    include('config.php');  
    $name =$_POST['name'];
    $account = $_POST['account'];  
    $account2 =  $_POST['account2']; 
    $amount = $_POST['amount']; 


   
   
    $sql = "UPDATE users SET balance=balance+$amount WHERE account_number=$account";
   $sql2 = "UPDATE users SET balance=balance-$amount WHERE user=$account2";

   $sql3 = "INSERT INTO transactions (id,date,user, account_number,type ,amount)     VALUES('3','2021-12-01','$name','$account','withdraw','$amount')";
   

if ($con->query($sql3) === TRUE) {
  if($con->query($sql) === TRUE)
  {
    if($con->query($sql2) === TRUE)
    {
       echo "Record updated successfully";
  header('Location:user_home.php');
    }
  }
 
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?>
