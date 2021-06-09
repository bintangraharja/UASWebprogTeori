<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style;?>
</head>
<body class="home" style= "background-image: url('http://localhost/UASWebProgTeori/assets/Background/HomeBG.jpg');">
	<div class="container">
		<?php echo $sidebar; ?>
		<br><br><br>
		<h1 class="headTitle"><?php echo $this->session->userdata('name');?>'s Order</h1>
		<br>
		<a href="<?php echo site_url('home');?>"><input type="submit" class="btn btnBack" value="Back"></a>
		<br><br>
		<?php 
		if($order == NULL){
		?>
		<h1>You Didn't Order Anything</h1>
		<?php
		}else{
		foreach($order as $row ){
			$orderId = $row['OrderID'];
			$status = $row['Status'];
			$consolID = $row['ConsoleID'];
			$consolName = $row['ConsoleName'];
			$duration = $row['Duration'];
			$Pict = $row['Pict'];
			$extPict = $row['extPict'];
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h4>ORDER ID : <?php echo $orderId;?> </h4>
				</div>
				<div class="col-sm-3" style="text-align: right;">
					<?php 
					if($status == "Has Been Sent"){ ?>
						<a href="<?php echo site_url('OrderList/update/').$orderId;?>" ><input type="submit" class="btn btnBook" value="Ready to Pick-Up"></a>
					<?php }else{ ?>
						<input type="submit" class="btn btnBook" value="Ready to Pick-Up" disabled>
					<?php } ?>
					
				</div>
			</div>

			<div class="row" style="text-align: center;">
				<div class="col-sm-3">
					<img class="card-img-top" style="width: 100%" src="data:<?php echo $extPict; ?>;base64,<?php echo $Pict; ?>">
				</div>
				<div class="col-sm-4">
					<h3><?php echo $consolName; ?></h3>
					<h4 style="color: #858585;">Duration : <?php echo $duration;?> Days</h4>
				</div>
				<div class="col-sm-2">
					<a href="<?php echo site_url('OrderDetail').'/'.$orderId;?>">
						<h4 class="mid">View Details <span class="glyphicon glyphicon-chevron-down"></span></h4>
					</a>
				</div>
			</div>
			<div class="col-sm-12" style="text-align: right;">
				<h4>Status : <?php echo $status;?></h4>
			</div>
		</div>
		<hr style="border-color: #FFBB0E;">
		<?php
		}
	}
		?>
	</div>
</body>
</html>