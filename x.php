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
    <link rel="stylesheet" href="user_admin_page.css">

    
  </head>
  <body>
    <div class="sidebar">
  <a href="admin_aditi.html">Home</a>
  <a class="active" href="users.html">Users</a>
  <a href="credit_debit.html">Credit/Debit</a>
 
</div>
    <h2><center>Admin Side Page</h2></center>
    <h3><center>Add new users</h3></center>
    <div id="frm">
    <form name="f1" action = "auth4.php" onsubmit = "return validation()" method = "POST"><center>
      <div class="input-row">
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" />
      </div>
      <div class="input-row">
        <label for="Account_Number">Account Number</label>
        <input type="text" name="Account_Number" id="Account_Number" />
      </div>
       <div class="input-row">
        <label for="Balance">Balance</label>
        <input type="text" name="Balance" id="Balance" />
      </div>
      <button>Submit</button>
    </center>
    </form>
    <table>
      <center>
      <thead>
        <tr>
          <th>Name</th>
          <th>Account Number</th>
          <th>Balance</th>
        </tr>
      </thead>

      <tbody>
        
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


      </tbody>
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

