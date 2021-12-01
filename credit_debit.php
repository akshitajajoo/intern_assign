<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="salt2.css"> 
</head>
<body>

<div class="sidebar">
  <a href="admin_home.php">Home</a>
  <a href="lists_of_users.php">Users</a>
  <a class="active" href="credit_debit.php">Credit/Debit</a>
  <a href="logout.php">Logout</a>
 
</div>
<center>
 <div id = "frm">  
       
        <form name="f1" action = "deposit.php" onsubmit = "return validation()" method = "POST">  
             <div class="container">

              <p>  
                <label><b>User Name</label> <br> 
                <input type = "text" placeholder="Name" id ="name" name  = "name" /> 

            </p> 
             <p>  
                <label><b>My Account Number</label> <br> 
                <input type = "text" placeholder="16 digit Account number" id ="account" name  = "account" /> 

            </p>   
            <p>  
                <label> Amount </label>  <br>
                <input type = "text" placeholder="Amount" id ="amount" name  = "amount" />  
            </p>  
            <p>     
                <button type="submit" id="btn value = "Login" class="SubmitButton">Deposit</button >
                <!-- <input type =  "submit" id = "btn" value = "Login" />   -->

            </p> 
        </b>
        </div>
        </form>  
    </div>  

        <div id = "frm">  
        <form name="f2" action = "withdraw.php" onsubmit = "return validation2()" method = "POST">  
             <div class="container">

              <p>  
                <label><b>User Name</label> <br> 
                <input type = "text" placeholder="Name" id ="name" name  = "name" /> 

            </p> 
             <p>  
                <label><b>My Account Number</label> <br> 
                <input type = "text" placeholder="16 digit Account number" id ="account" name  = "account" /> 

            </p>   
            <p>  
                <label> Amount </label>  <br>
                <input type = "text" placeholder="Amount" id ="amount" name  = "amount" />  
            </p>  
            <p>     
                <button type="submit" id="btn value = "Login" class="SubmitButton">Withdraw</button >
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
                var id=document.f1.account.value;  
                var ps=document.f1.amount.value;  

                if(id.length=="" && ps.length=="") {  
                    alert("Account Name and Amount fields are empty");  
                    return false;  
                }
                else if(id.length!=16)
                {
                	alert("Account number should be of length 16");
                	return false;
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Account number is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Amount field is empty");  
                    return false;  
                    }  
                }                             
            }

           


        </script>  


</body>
</html>
