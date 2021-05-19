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
		<a href="<?php echo site_url('home'); ?>"><button type="submit" class="btn btnBack"><span class="glyphicon glyphicon-chevron-left"></span> Back</button></a>
		<br><br>
		<div class="modal-header">
			<h4 class="mid headTitle">Edit Console</h4>
		</div>
		<div class="modal-body">
			<form action="">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Console ID</label>
					<div class="col-sm-9">
						<input type="text" name="consoleID" id="consoleID" class="form-control" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Console Name</label>
					<div class="col-sm-9">
						<input type="text" name="consoleName" id="consoleName" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Price</label>
					<div class="col-sm-9">
						<input type="text" name="price" id="price" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Quantity</label>
					<div class="col-sm-9">
						<input type="text" name="qty" id="qty" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Description</label>
					<div class="col-sm-9">
						<textarea name="consoleID" id="consoleID" class="form-control"></textarea> 
					</div>
				</div>
				<div class="form-group">
					<label for="imageMenu">Upload an Image</label>
					<input type="file" name="imageMenu" id="imageMenu">
				</div>
				<div class="form-group row">
					<div class="pull-right" style="margin-right: 15px;">
						<input type="submit" class="btn btnInsert" value="Update">
					</div>
				</div>
			</form>		
		</div>
	</div>
</body>
</html>