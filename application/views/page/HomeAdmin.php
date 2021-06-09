<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
	<?php echo $style;?>
</head>
<body class="admin" style= "background-image: url('http://localhost/UASWebProgTeori/assets/Background/AdminBG.png');">
	<?php echo $sidebar;?>
	<div class="container">
		<div class="container-fluid">
		<br><br><br>
		<div class="x">
			<a href="#">
				<button type="submit" data-toggle="#myModal" data-target="#myModal" id="addConsole" class="btn btnBook"><span class="glyphicon glyphicon-plus-sign"></span> Add Console</button>
			</a>
		</div>
		<br>
		<table id="tables" class="table table-striped table-border dataTable adminTable" style="width: 100%;">
			<tbody>
				<tr>
					<th> Picture </th>
					<th> Console ID </th>
					<th> Console Name </th>
					<th> Price </th>
					<th> Qty </th>
					<th> Description </th>
					<th> Action </th>
				</tr>
					<?php 
						foreach($product as $row){
						$ConsoleID = $row['ConsoleID'];
						$ConsoleName = $row['ConsoleName'];
						$Price =$row['Price'];
						$Qty = $row['Qty'];
						$Desc = $row['Description'];
						$extPict = $row['extPict'];
						$Pict = $row['Pict'];
						
					?>
				<tr>
					<td>
					<img style="width: 135px; height: 90px;" src="data:<?php echo $extPict; ?>;base64,<?php echo $Pict; ?>"></td>
					<td> <?php echo $ConsoleID; ?></td>
					<td> <?php echo $ConsoleName; ?></td>
					<td> Rp<?php echo $Price; ?>,- </td>
					<td> <?php echo $Qty; ?> </td>
					<td> <?php echo $Desc; ?></td>
					<td> 
						<a class='editMenu' href="<?php echo site_url('admin/editConsole').'/'.$ConsoleID; ?>">
							<span class="glyphicon glyphicon-wrench"></span>
						</a>
						<a class='deleteMenu' href="<?php echo site_url('admin/deleteConsole').'/'.$ConsoleID;?>">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
				</tr>
				<?php } ?>
						</tbody>
		</table>
	</div>
	</div>

	<div class="container">
		<div id="addModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="mid headTitle">Add Console</h4>
					</div>
					<div class="modal-body">
						<form action="<?php echo site_url('admin/addConsole');?>" method="post" enctype="multipart/form-data" autocomplete="off">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" style="color: black;">Console ID</label>
								<div class="col-sm-9">
									<input type="text" name="consoleID" id="consoleID" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" style="color: black;">Console Name</label>
								<div class="col-sm-9">
									<input type="text" name="consoleName" id="consoleName" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" style="color: black;">Price</label>
								<div class="col-sm-9">
									<input type="text" name="price" id="price" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" style="color: black;">Quantity</label>
								<div class="col-sm-9">
									<input type="text" name="qty" id="qty" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" style="color: black;">Description</label>
								<div class="col-sm-9">
									<textarea name="description" id="description" class="form-control" required></textarea> 
								</div>
							</div>
							<div class="form-group">
								<label for="imageMenu" style="color: black;">Upload an Image</label>
								<input type="file" name="imageMenu" id="imageMenu" required>
							</div>
							<div class="form-group row">
								<div class="pull-right" style="margin-right: 15px;">
									<input name="submit" type="submit" class="btn btnInsert" value="Submit"/>
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

		$('#addConsole').click(function() {
			$('#addModal').modal('show');
		})
	});
	</script>
</body>
</html>