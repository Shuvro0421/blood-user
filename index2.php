<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Blood Management</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 4px 6px;
  text-decoration: none;
  font-size: 30px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.header {
  padding: 150px;
  text-align: center;
  background: #673AB7;
  color: white;
  font-size: 50px;
}
</style>
</head>
<div class="header" style="background: crimson">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <h1 style="font-family: 'Pacifico', cursive">Welcome to Blood Management</h1>
</div>
<body>
<div class="topnav">
  <a href="logout.php">&emsp;&emsp;Logout&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
</div>

    <style>
        body{
            background: white;
        }
    </style>


 <!-- <div class="container"> -->
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Entry Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center" style="color:gold">Fill up the form</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
		
				
			<div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blood Available:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="blood_available">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blood Bag Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="blood_number">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Donor Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="donor_name">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Donor Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="donor_number">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

			</form>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
<style>
.PP{
	text-align: center;
	
}
</style>
</html>

</body>
</html>
</body>
</html>

<!-- </div> -->
</body>
</html>