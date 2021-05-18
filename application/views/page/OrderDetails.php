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
		<a href="OrderList.php"><input type="submit" class="btn btnBack" value="Back"></a>
		<br><br>
		<div class="row">
			<div class="col-sm-9">
				<h4>ORDER ID : <!-- baca database --> </h4>
			</div>
			<div class="col-sm-3" style="text-align: right;">
				<input type="submit" class="btn btnBook" value="Ready to Pick-Up">
			</div>
		</div>
		<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-sm-3">
					<img src="./Gallery/C1002.jpg" style="width: 100%;">
				</div>
				<div class="col-sm-6">
					<h3>Nintendo DS Lite</h3>
					<p>Duration : 3 Days</p>
				</div>
			</div>
			<br>
			<div class="row" style="text-align: center;">
				<div class="col-sm-3">
					<img src="./Gallery/C1002.jpg" style="width: 100%;">
				</div>
				<div class="col-sm-6">
					<h3>Nintendo DS Lite</h3>
					<p>Duration : 3 Days</p>
				</div>
			</div>
			<br>
			<div class="row" style="text-align: center;">
				<div class="col-sm-3">
					<img src="./Gallery/C1002.jpg" style="width: 100%;">
				</div>
				<div class="col-sm-6">
					<h3>Nintendo DS Lite</h3>
					<p>Duration : 3 Days</p>
				</div>
			</div>
			<br>
			<div class="col-sm-12" style="text-align: right;">
				<h4>Status : Sudah Dikirim</h4>
			</div>
		</div>
		<hr style="border-color: #FFBB0E;">
	</div>
</body>
</html>