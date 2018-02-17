<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-container w3-center">
<form action="#" method="post">
<div class="w3-container">
  <h2>Smart Room</h2>
  <div class="w3-card-4 w3-center" style="width:100%">
    <header class="w3-container w3-light-grey">
      <h3>Login</h3>
    </header>
    <div class="w3-container">
      <p> Username and Password</p>
      <hr>
            <p><input placeholder="username" class="w3-input w3-border" type="text" name="user"></p>
            <p><input placeholder="password" class="w3-input w3-border" type="text" name="pass"></p>
    </div>
    <input type="submit" value="LOGIN" class="w3-button w3-block w3-dark-grey">
  </div>
</div>
</form>
</body>
</html>
<?php 
    error_reporting(0);
   if ( $_REQUEST['user'] == "admin") {
       if ($_REQUEST['pass'] == "admin") {
           session_start();
           $_SESSION['userlogin'] = "mario";
           header("location:./../../../index.php");
       }
   }
?>