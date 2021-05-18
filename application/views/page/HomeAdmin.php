<?php 
	include_once('sidebarAdmin.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rental UAS IF430 - Gaming Buddy</title>
</head>
<body class="admin">
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
			<tr>
				<th> Picture </th>
				<th> Console ID </th>
				<th> Console Name </th>
				<th> Price </th>
				<th> Qty </th>
				<th> Description </th>
				<th> Action </th>
			</tr>
				<!-- <?php 
					
				?> -->
			<tr>
				<td><img src="./Gallery/C0001.jpg" style="width: 135px; height: 90px;"></td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> 
					<a class='editMenu'>
						<span class="glyphicon glyphicon-wrench"></span>
					</a>
					<a class='deleteMenu'>
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp 2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp 2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp 2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp 2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td> C0001 </td>
				<td> PlayStation 1 </td>
				<td> Rp 2.900,- </td>
				<td> 3 </td>
				<td> Konsol video game yang dikembangkan oleh Sony Computer Entertainment yang dirilis pada 3 Desember 1994. Konsol ini memungkinkan untuk menampilkan video full motion dengan kualitas lebih tinggi daripada konsol lain pada generasinya. </td>
				<td> </td>
			</tr>
		</table>
	</div>
	</div>

	<div class="container">
		<div id="addModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 style="text-align: center; font-weight: bold;">Add Console</h4>
					</div>
					<div class="modal-body">
						<form action="">
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
									<textarea name="consoleID" id="consoleID" class="form-control" required></textarea> 
								</div>
							</div>
							<div class="form-group">
								<label for="imageMenu" style="color: black;">Upload an Image</label>
								<input type="file" name="imageMenu" id="imageMenu" required>
							</div>
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

		$('#addConsole').click(function() {
			$('#addModal').modal('show');
		})
	});
	</script>
</body>
</html>