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
 <link rel="stylesheet" href="salt2.css"> 
</head>
<body>

<div class="sidebar">
  <a href="user_home.php">Home</a>
  <a href="transactions.php">Transactions</a>
  <a class="active" href="transfer.php">Transfer</a>
  <a href="logout.php">Logout</a>
 
</div>
<center>
 <div id = "frm">  
        
        <form name="f1" action = "auth_transfer.php" onsubmit = "return validation()" method = "POST">  
             <div class="container">
              <p>  
                <label><b>Name</label> <br> 
                <input type = "text" placeholder="Username" id ="name" name  = "name" /> 

            </p>  
             <p>  
                <label><b>My Account Number</label> <br> 
                <input type = "text" placeholder="16 digit Account number" id ="account2" name  = "account2" /> 

            </p>  

            <p>  
                <label><b>To Account </label> <br> 
                <input type = "text" placeholder="16 digit Account number" id ="account" name  = "account" /> 

            </p>  
            <p>  
                <label> Amount </label>  <br>
                <input type = "text" placeholder="Amount" id ="amount" name  = "amount" />  
            </p>  
            <p>     
                <button type="submit" id="btn value = "Login" class="SubmitButton">Submit</button >
                <!-- <input type =  "submit" id = "btn" value = "Login" />   -->

            </p> 
        </b>
        </div>
        </form>  
    </div>  
   </center> 


<script>  
            function validation()  
            {  
                var name=document.f1.name.value;
                var id2=document.f1.account2.value;
                var id=document.f1.account.value;  
                var ps=document.f1.amount.value;  

                if(id.length=="" && ps.length=="") {  
                    alert("Account Name and Amount fields are empty");  
                    return false;  
                }
                else if(id.length!=16 or id2.length!=16)
                {
                	alert("Account number should be of length 16");
                	return false;
                }  
                else  
                {  
                    if(id.length=="" or id2.length=="") {  
                        alert("Account number is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Amount field is empty");  
                    return false;  
                    }  
                    if(name.length=="")
                    {
                        alert("Name field is empty");
                        return false;
                    }
                }                             
            }  
        </script>  


</body>
</html>
