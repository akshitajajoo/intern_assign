<?php    
session_start();

    include('config.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $type = $_POST['type'];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where user = '$username' and pass = '$password' and type='$type'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            
            $_SESSION['username']=$username;
            $_SESSION['verified']=true;
            header('Location:'.$type.'_home.php');
             // header('Location:/try/' .$username . '.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  