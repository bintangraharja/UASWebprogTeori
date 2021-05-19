<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style;?>
</head>
<body class="home" style= "background-image: url('../<?php base_url('')?>assets/Background/HomeBG.jpg');">
	<?php echo $sidebar;?>
	<div class="container">
		<br><br><br>
		<h1 class="headTitle"><?php echo $this->session->userdata('name');?>'s Order</h1>
		<br>
		<a href="<?php echo site_url('OrderList');?>"><input type="submit" class="btn btnBack" value="Back"></a>
		<br><br>
		<div class="row">
			<div class="col-sm-9">
				<h4>ORDER ID : <?php echo $Oid;?></h4>
			</div>
			<div class="col-sm-3" style="text-align: right;">
					<?php if($Status == "Has Been Sent"){ ?>
						<a href="<?php echo site_url('OrderList/update/').$Oid;?>" ><input type="submit" class="btn btnBook" value="Ready to Pick-Up"></a>
					<?php }else{ ?>
						<input type="submit" class="btn btnBook" value="Ready to Pick-Up" disabled>
					<?php } ?>
			</div>
		</div>
		<div class="container">
			<?php
			foreach($orderDet as $row){
				$ConsoleID = $row['ConsoleID'];
				$ConsoleName = $row['ConsoleName'];
				$Duration = $row['Duration'];
			?>
			<div class="row" style="text-align: center;">
				<div class="col-sm-3">
				<img class="card-img-top" style="width: 100%" src="<?php echo site_url('home/showImg/').$ConsoleID ?>">
				</div>
				<div class="col-sm-6">
					<h3><?php echo $ConsoleName;?></h3>
					<h4 style="color: #858585;">Duration : <?php echo $Duration;?> Days</h4>
				</div>
			</div>
			<br>
			<?php
			}
			?>
			<div class="col-sm-12" style="text-align: right;">
				<h4>Status : <?php echo $Status;?></h4>
			</div>
		</div>
		<hr style="border-color: #FFBB0E;">
	</div>
</body>
</html>