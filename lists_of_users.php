<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>How to add & remove table rows</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="salt2.css">

    
  </head>
  <body>
    <div class="sidebar">
  <a href="admin_home.php">Home</a>
  <a class="active" href="lists_of_users.php">Users</a>
  <a href="credit_debit.php">Credit/Debit</a>
  <a href="logout.php">Logout</a>
 
</div>

<center>
 <div id = "frm">  
       
        <form name="f1" action = "auth4.php" onsubmit = "return validation()" method = "POST">  
             <div class="container">

              <p>  
                <label><b>User Name</label> <br> 
                <input type = "text" placeholder="Name" id ="name" name  = "name" /> 

            </p> 
             <p>  
                <label><b>Account Number</label> <br> 
                <input type = "text" placeholder="16 digit Account number" id ="account" name  = "account" /> 

            </p>   
            <p>  
                <label> Amount </label>  <br>
                <input type = "text" placeholder="Amount" id ="amount" name  = "amount" />  
            </p>  
            <p>     
                <button type="submit" id="btn value = "Login" class="SubmitButton">ADD</button >
                <!-- <input type =  "submit" id = "btn" value = "Login" />   -->

            </p> 
        </b>
        </div>
        </form>  
    </div>  

    <table>
      <center>

        <tr>
          <th>Name</th>
          <th>Account Number</th>
          <th>Balance</th>
        </tr>
    <?php

include "config.php"; // Using database connection file here

$sql = "select *from users"; 

$result = mysqli_query($con, $sql);
// $records = mysqli_query($db_name,"select * from transactions"); // fetch data from database
$qty=0;
while($data = mysqli_fetch_array($result) and ($qty<2))
{
  $qty+=1;
?>
  <tr>
    <td><?php echo $data['user']; ?></td>
    <!-- if($data['type'] as "deposit")
    { -->
      <td><?php echo $data['account_number']; ?></td>
    <!-- } -->
    <td><?php echo $data['balance']; ?></td>
  </tr> 
<?php
}
?>


    </center>
    </table>
    <script>
      const formEl = document.querySelector("form");
      const tbodyEl = document.querySelector("tbody");
      const tableEl = document.querySelector("table");
      function onAddWebsite(e) {
        e.preventDefault();
        const Account_Number = document.getElementById("Account_Number").value;
        const Name = document.getElementById("Name").value;
        const Balance = document.getElementById("Balance").value;
        tbodyEl.innerHTML += `
            <tr>
                <td>${Name}</td>
                <td>${Account_Number}</td>
                <td>${Balance}</td>
                
            </tr>
        `;
      }
      formEl.addEventListener("submit", onAddWebsite);
      tableEl.addEventListener("click", onDeleteRow);
    </script>
  </body>
</html>

