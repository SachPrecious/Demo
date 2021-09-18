<?php
if (isset($_GET["register"])) {
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">

	</head>
<body style="background-color:rgb(49, 104, 255) ;">
<div class="wait overlay">
	<div class="loader"></div>
</div>
	
	
	<div class="container-fluid" style="background-color:rgb(70, 70, 70);">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--This is the alert division this is used
					Getting Alers from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-heading">
					<div class="panel-heading text-center">

					<h1>Customer Registration</h1>
					 <img src="Elek2.png" alt="User Registration" srcset="" >

				    </div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-12">
								
									<span><i class="bi bi-person"></i></span>
									<label for="f_name">First Name</label>
									<input type="text" id="f_name" name="f_name" class="form-control" required>
                                
                               
								
							</div>
							
						</div>

						<div class="row">
							
                                <div class="col-md-12">
								<span><i class="bi bi-person"></i></span>
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control" required>
							</div>

						</div>
						
						<div class="row">
							<div class="col-md-12">
								<span><i class="bi bi-envelope"></i></span>
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<span><i class="bi bi-eye"></i></span>
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<span><i class="bi bi-eye"></i></span>
								<label for="repassword">Confirm Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<span><i class="bi bi-number"></i></span>
								<label for="mobile">Phone Number</label>
								<input type="text" id="mobile" name="mobile"class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" name="address2"class="form-control" required>
							</div>
						</div>
						<p><br/></p>
						
						<div class="row">
							<div class="col-md-12">
								<input style="width:50%;" value="Register" type="submit" name="signup_button"class="btn btn-outline-primary">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>




</body>
</html>
	<?php
}



?>






















