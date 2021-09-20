<?php
include "DatabaseConnection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">



    <title>Admin Login</title>
</head>
<body>


<div class="loginform">
<h2>Admin login Panel</h2>
<img src="/../Elek2.png" alt="Admin Login" srcset="" >
<form action="" method="post">
       <div class="input-field">
           <input type="text" placeholder="Admin Name" name="AdminName">
       </div>
       <div class="input-field">
           <input type="text" placeholder="Password" name="Password">
       </div>
       <button type="submit" name="Signin">Sign In</button>
       <div class="extra">
           <a href="#">Forgot Password?</a>
       </div>

</form>




</div>





    
</body>
</html>