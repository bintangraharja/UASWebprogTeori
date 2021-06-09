<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style; ?>
</head>
<body class="admin" style= "background-image: url('http://localhost/UASWebProgTeori/assets/Background/AdminBG.png');">
	<?php echo $sidebar; ?>
	<div class="container">
		<br><br><br>
		<a href="<?php echo site_url('admin'); ?>"><button type="submit" class="btn btnBack"><span class="glyphicon glyphicon-chevron-left"></span> Back</button></a>
		<br><br>
		<table id="tables" class="table table-border dataTable adminOrder" style="width: 100%;">
			<tr>
				<th> Order ID </th>
				<th> Customer Name </th>
				<th> Total Price </th>
				<th> Transaction Status </th>
				<th> Action </th>
			</tr>
				<?php 
					foreach($orders as $row){
						$OrderID = $row['OrderID'];
						$Name = $row['FullName'];
						$Total = $row['TotalPrice'];
						$Status = $row['Status'];
				?> 
			<tr>
				<td> <?php echo $OrderID; ?> </td>
				<td> <?php echo $Name; ?> </td>
				<td> Rp<?php echo $Total;?>,- </td>
				<td> <?php echo $Status; ?> </td>
				<td> 
					<a class='editMenu' href="<?php echo site_url('admin/statusAdmin/').$OrderID; ?>">
						<span class="glyphicon glyphicon-wrench"></span>
					</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>