<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php 
		echo $style;
	?>
</head>
<body class="home" style= "background-image: url('http://localhost/UASWebProgTeori/assets/Background/HomeBG.jpg');">
	<div class="container">
		<br><br><br>
		<?php echo $sidebar; ?>
			<h1 class="headTitle">Our Console</h1>
		<br><br><br>
		<div class="row">
			<?php 
			foreach($product as $data){
				$consolID = $data['ConsoleID'];
				$consolName = $data['ConsoleName'];
				$extPict = $data['extPict'];
				$Pict = $data['Pict'];
				$i = 0;
				
				if($i == 3){
					echo "<div class='row'>";
				}
			?>
			<div class="col-sm-4 pad">
				<a href="<?php echo site_url('detail').'/'.$consolID;?>" class="menu-border">
					<div class="card mid">
						<img class="card-img-top" style="width: 100%" src="data:<?php echo $extPict; ?>;base64,<?php echo $Pict; ?>">
						<div class="card-body">
							<h4 class="card-title mid"><?php echo $consolName?></h4>
							<br><br>
							<footer class="blockquote-footer seeDetails">
								<small>
									See Details
								</small>
							</footer>
						</div>
					</div>
				</a>
			</div>
			<?php
				if($i == 3){
					echo "</div>";
					$i = 0;
				}
				$i++;
				}
			?>
		</div>
		<br><br>
	</div>
</body>
</html>