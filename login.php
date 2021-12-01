<html>  
<head>  
    <title>PHP login system</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "salt.css"> 
    <script src="script.js"></script>  
</head>  
<body>  
    <div id = "frm">  
        <h1>Login form</h1>  
        <form name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST">  
             <div class="container">
            <p>  
                <label><b> User Name: </label>  
                <input type = "text" placeholder="Enter Username" id ="user" name  = "user" /> 

            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" placeholder="Enter Password" id ="pass" name  = "pass" />  
            </p>  

            <p>  
                <label> Type: </label>  
                <input type = "text" placeholder="Admin or User id "type" name  = "type" />  
            </p> 

            <p>     
                <button type="submit" id="btn" value = "Login" class="SubmitButton" onsubmit = "return login()">Login</button >
                <!-- <input type =  "submit" id = "btn" value = "Login" />   -->

            </p> 
        </b>
        </div>
        </form>  
    </div>  
  

</body>     
</html>  