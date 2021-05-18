<?php 
	include_once('sidebarIn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
</head>
<body class="home">
	<div class="container">
		<br><br><br>
		<h1 class="headTitle">User's Order</h1>
		<br>
		<a href="HomePage.php"><input type="submit" class="btn btnBack" value="Back"></a>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h4>ORDER ID : <!-- baca database --> </h4>
				</div>
				<div class="col-sm-3" style="text-align: right;">
					<input type="submit" class="btn btnBook" value="Ready to Pick-Up">
				</div>
			</div>
			<div class="row" style="text-align: center;">
				<div class="col-sm-3">
					<img src="./Gallery/C1002.jpg" style="width: 100%;">
				</div>
				<div class="col-sm-4">
					<h3>Nintendo DS Lite</h3>
					<p>Duration : 3 Days</p>
				</div>
				<div class="col-sm-2">
					<a href="OrderDetails.php">
						<h4 class="mid">View Details <span class="glyphicon glyphicon-chevron-down"></span></h4>
					</a>
				</div>
				<div class="col-sm-3">
					<h4>Status : Sudah Dikirim</h4>
				</div>
			</div>
		</div>
		<hr style="border-color: #FFBB0E;">
		<div class="container">
			<div class="row">
			<div class="col-sm-9">
				<h4>ORDER ID : <!-- baca database --> </h4>
			</div>
			<div class="col-sm-3" style="text-align: right;">
				<input type="submit" class="btn btnBook" value="Ready to Pick-Up">
			</div>
		</div>
		<div class="row" style="text-align: center;">
					<div class="col-sm-3">
						<img src="./Gallery/C1002.jpg" style="width: 100%;">
					</div>
					<div class="col-sm-4">
						<h3>Nintendo DS Lite</h3>
						<p>Duration : 5 Days</p>
					</div>
					<div class="col-sm-2">
						<a href="OrderDetails.php">
							<h4 class="mid">View Details <span class="glyphicon glyphicon-chevron-down"></span></h4>
						</a>
					</div>
					<div class="col-sm-3">
						<h4>Status : Sudah Dikirim</h4>
					</div>
				</div>
		</div>
	</div>
</body>
</html>