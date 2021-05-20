<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style; ?>
	
</head>
<body class="admin" style= "background-image: url('http://localhost/UASWebprogTeori/assets/Background/AdminBG.png');">
	<?php echo $sidebar; ?>
	<div class="container" style="width: 65%;">
		<br><br><br>
		<a href="<?php echo site_url('admin/orderList'); ?>"><button type="submit" class="btn btnBack"><span class="glyphicon glyphicon-chevron-left"></span> Back</button></a>
		<br><br>
		<div class="modal-header">
			<h4 class="mid headTitle">Data Edit</h4>
		</div>
		<div class="editStatus">
			<form action="<?php echo site_url('admin/updateStatus')?>" method="POST">
				<div class="row">
					<div class="col-sm-6">
						<p>Order ID<p>
					</div>
					<div class="col-sm-6">
						<p><?php echo $OrderID?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p>Customer Name<p>
					</div>
					<div class="col-sm-6">
						<p><?php echo $orders[0]['FName'].' '.$orders[0]['LName'];?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p>Details :</p>
					</div>
				</div>
				<?php 
					$Status = $orders[0]['Status'];
					$totalPrice = $orders[0]['TotalPrice'];
					foreach($orders as $row){
					$consoleName = $row['ConsoleName'];
					$duration = $row['Duration'];
					$price = $row['Price'];
				?>
				<div class="row">
					<div class="col-sm-4">
						<p><?php echo $consoleName;?></p>
					</div>
					<div class="col-sm-2">
						<p>1</p>
					</div>
					<div class="col-sm-2">
						<span><?php echo $duration;?></span><span> Days</span>
					</div>
					<div class="col-sm-4">
						<p>Rp <?php echo $duration*$price;?>,-</p>
					</div>
				</div>
				<?php }?>
				<hr style="color: #000000">		
				<div class="row">
					<div class="col-sm-8">
						<p>Total Price</p>
					</div>
					<div class="col-sm-4">
						<p>Rp <?php echo $totalPrice;?>,-</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p>Transaction Status: <?php echo $Status?></p>
					</div>
					<div class="col-sm-6">
						<div class="mid">
							<input name="OrderID" type="text" class="hide" value="<?php echo $OrderID;?>">
							<input 
							<?php if($Status == 'Has Been Sent' || $Status == 'Completed'){
								echo "disabled";
							}?> type="submit" name="Status" class="btn btnInsert" 
							<?php 
							if($Status == 'On Delivery'){
								echo "value='Has Been Sent'";
							}else{
								echo "value='Completed'";
							}?>>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>