<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php 
	echo $style; 
	?>
	<script>
       $(document).ready(function(){
           $('.captcha-refresh').on('click', function(){
               $.get('<?php echo base_url().'login/refresh'; ?>', function(data){
                   $('#image_captcha').html(data);
               });
           });
       });
   </script>
</head>
<body class="home" style= "background-image: url('<?php base_url('')?>assets/Background/HomeBG.jpg');">
	<br><br><br><br>
	<?php echo $sidebar; ?>
	<div class="container bg-form">
		<h2 class="headTitle">Sign In</h2>
		<br>
		<form action="<?php echo site_url('Login') ?>" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" id="Email" class="form-control" placeholder="example@gmail.com" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input name="password" type="password" id="password" class="form-control" placeholder="********" required>
				</div>
			</div>
			<div class="form-group row">
				<p id="image_captcha"><?php echo $captchaImg; ?></p>
				<a href="javascript:void(0);" class="captcha-refresh" ><button class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></button></a>
				<input type="text" name="captcha" />
			</div>
			<div>
	   			<p style="color:red;"> <?php 
				 	if(isset($failInfo)){
						echo $failInfo; 
					 }
				?> </p>
			</div>
			
			<input type="submit" name="submit" class="btn btn-block btnReglog mid" value="SIGN IN">
		</form>
		<br><br>
		<div class="mid">
			<a href="<?php echo site_url('SignUp'); ?>">Don't have an account? <input type="submit" class="btn btnAcc" value="Create New Account"></a>
		</div>
		<br><br>
	</div>
</body>
</html>