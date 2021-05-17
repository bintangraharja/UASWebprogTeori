<?php
	include_once('sidebar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
</head>
<body class="home">
	<br><br><br><br>
	<div class="container bg-form">
		<h2 class="headTitle">Create New Account</h2>
		<br>
		<form action="">
			<div class="form-row">
				<div class="form-group col-md-6">
					<input type="text" name="fname" id="Fname" class="form-control" placeholder="First Name" required>
				</div>
				<div class="form-group col-md-6">
					<input type="text" name="lname" id="Lname" class="form-control" placeholder="Last Name" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Address</label>
				<div class="col-sm-10">
					<textarea type="text" name="address" id="address" class="form-control" placeholder="Based on ID" required></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Phone Number</label>
				<div class="col-sm-10">
					<input type="tel" name="phone" id="phone" class="form-control" placeholder="012-345-678" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" id="Email" class="form-control" placeholder="example@gmail.com" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" id="password" class="form-control" placeholder="********" required>
					<small class="text-muted">
						Must be 8-20 characters long.
					</small>
				</div>
			</div>
			<button type="submit" class="btn btn-block btnReglog mid">CREATE NOW</button>
		</form>
		<br><br>
		<div class="mid">
			<a href="Login.php">Already have an account? <button type="button" class="btn btnAcc">Sign In</button></a>
		</div>
		<br><br>
	</div>
</body>
</html>