
<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style; ?>
</head>
<body class="home" style= "background-image: url('http://localhost/UASWebProgTeori/assets/Background/HomeBG.jpg');">
	<?php echo $sidebar;
	foreach($product as $data){
		$id = $data['ConsoleID'];
		$name = $data['ConsoleName'];
		$price = $data['Price'];
		$qty = $data['Qty'];
		$desc = $data['Description'];
		$Pict = $data['Pict'];
		$extPict = $data['extPict'];
	}
	?>
	<div class="container">
		<br><br><br>
		<h1 class="headTitle">Our Console</h1>
		<br>
		<a href="<?php echo base_url(); ?>"><button type="submit" class="btn btnBack"><span class="glyphicon glyphicon-chevron-left"></span> Back</button></a>
		<br><br>
		<img src="data:<?php echo $extPict; ?>;base64,<?php echo $Pict; ?>" style="width:50%">
		<div class ="col-sm-6" style="text-align:justify; float:right;">
			<h1 class="titleConsole"><?php echo $name ?></h1>
			<hr style="border-color: #FFBB0E">
			<p class="desc"><?php echo $desc; ?></p>
			<p class="desc">Ready Stock &nbsp;: <?php echo $qty; ?> </p>
			<p class="desc">Rent Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp <?php echo $price ?>,- /day</p>
			<form method="post">
			<input name="submit" type="submit" class="btn btnBook" value="Add to Cart" <?php if($bought == "true" || $qty == 0){echo 'disabled';}?> ></input>
			</form>
		</div>
	</div>
</body>
</html>