<?php  session_start(); ?>

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
	<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
    
    <title>User Login</title>
</head>
<body>
    
<div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8" id="signup_msg">
            <!--This is the alert division this is used
               Getting Alers from signup form-->
         </div>
         <div class="col-md-2"></div>
</div>




    
   <form action="Profile.php" method="post">
      <h1>Customer Registration</h1>
         <img src="Images/Elek2.png" alt="User Login" srcset="" >
         
         <div class="input-box">
            <span><i class="bi bi-envelope"></i></span>
            <input type="email" placeholder="Email" name="email" required>

         </div>
         <div class="input-box">
            <span><i class="bi bi-eye"></i></span>
            <input type="password" placeholder="Password" name="password" required>

         </div>
         
         <div class="button">            
            <button type="submit" name="login">Login</button>
         </div>
         



   </form>



</body>
</html>