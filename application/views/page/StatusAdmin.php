<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style; ?>
</head>
<body class="admin" style= "background-image: url('../<?php base_url('')?>assets/Background/AdminBG.png');">
	<?php echo $sidebar; ?>
	<div class="container" style="width: 65%;">
		<br><br><br>
		<a href="<?php echo site_url('admin/orderList'); ?>"><button type="submit" class="btn btnBack"><span class="glyphicon glyphicon-chevron-left"></span> Back</button></a>
		<br><br>
		<div class="modal-header">
			<h4 class="mid headTitle">Data Edit</h4>
		</div>
		<div class="editStatus">
			<form action="">
				<div class="row">
					<div class="col-sm-6">
						<p>Order ID<p>
					</div>
					<div class="col-sm-6">
						<p>XXXXX<!--baca database--></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p>Customer Name<p>
					</div>
					<div class="col-sm-6">
						<p>Ferry Lay<!--baca database--></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p>Details :</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p>Nintendo DS Lite</p>
					</div>
					<div class="col-sm-2">
						<p>1</p>
					</div>
					<div class="col-sm-2">
						<p>2 Days</p>
					</div>
					<div class="col-sm-4">
						<p>Rp12.000,-</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p>PlayStation 3</p>
					</div>
					<div class="col-sm-2">
						<p>1</p>
					</div>
					<div class="col-sm-2">
						<p>2 Days</p>
					</div>
					<div class="col-sm-4">
						<p>Rp30.000,-</p>
					</div>
				</div>
				<hr style="color: black;">		
				<div class="row">
					<div class="col-sm-8">
						<p>Total Price</p>
					</div>
					<div class="col-sm-4">
						<p>Rp42.000,-</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p>Transaction Status</p>
					</div>
					<div class="col-sm-6">
						<div class="mid">
							<input type="submit" name="" class="btn btnInsert" value="Has Been Sent">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>