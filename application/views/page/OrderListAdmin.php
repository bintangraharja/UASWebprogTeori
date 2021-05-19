<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style; ?>
</head>
<body class="admin" style= "background-image: url('../<?php base_url('')?>assets/Background/AdminBG.png');">
	<?php echo $sidebar; ?>
	<div class="container">
		<div class="container-fluid">
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
					<a class='editMenu' data-toggle="#myModal" data-target="#myModal">
						<span class="glyphicon glyphicon-wrench"></span>
					</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	</div>

	<div class="container">
		<div id="addModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="mid headTitle">Data Edit</h4>
					</div>
					<div class="modal-body">
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
							<hr style="color: #000000">		
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
									<select class="form-control" id="kategori">
										<option>Has Been Sent</option>
										<option>Completed</option>
									</select>
								</div>
							</div>
							<br>
							<div class="form-group row">
								<div class="pull-right" style="margin-right: 15px;">
									<button type="submit" class="btn btnInsert">Submit</button>
									<button type="submit" class="btn btnBack" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#addModal').modal({
				keyboard: false,
				show: false,
				backdrop: 'static'
			});

			$('.editMenu').click(function() {
				$('#addModal').modal('show');
			})
		});
	</script>
</body>
</html>