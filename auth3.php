<?php    
session_start();

    include('config.php');  
    $name = $_POST['name'];  
    $account_number =  $_POST['account_number']; 
    $balance = $_POST['balance']; 

    $sql = "INSERT INTO users (id,user, pass, account_number,balance,type)     VALUES(3,$name,'123456',$account_number,$balance,'user')";
            /*mysqli_select_db('problema_curs_1');
            $retval = mysqli_query($sql);
            if(! $retval )
            {
                die(json_encode(array("mesaj" => "Could not enter data:")));
            }
            echo "Entered data successfully\n";
            mysqli_close($conn);*/
   
   if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('Location:admin_home.php');
} else {
  echo "Error updating record: " . $con->error;
}
// if ($con->query($sql) === TRUE) {
//   echo "Record updated successfully";
//   header('Location:user_home.php');
// } else {
//   echo "Error updating record: " . $con->error;
// }

$con->close();
?>
