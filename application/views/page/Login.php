<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php 
	echo $style; 
	echo $sidebar;
	?>
</head>
<body class="home" style= "background-image: url('<?php base_url('')?>assets/Background/HomeBG.jpg');">
	<br><br><br><br>
	<div class="container bg-form">
		<h2 class="headTitle">Sign In</h2>
		<br>
		<form action="">
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
				</div>
			</div>
			<!--
			 	INSERT CAPTCHA HERE 
									-->
			<button type="submit" class="btn btn-block btnReglog mid">SIGN IN</button>
		</form>
		<br><br>
		<div class="mid">
			<a href="<?php echo site_url('SignUp'); ?>">Don't have an account? <button type="button" class="btn btnAcc">Create New Account</button></a>
		</div>
		<br><br>
	</div>
</body>
</html>