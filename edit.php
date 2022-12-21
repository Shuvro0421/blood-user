<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$blood_available = $_POST['blood_available'];
		$blood_number = $_POST['blood_number'];
		$donor_name = $_POST['donor_name'];
		$donor_number = $_POST['donor_number'];
		$sql = "UPDATE members SET blood_available = '$blood_available', blood_number = '$blood_number', donor_name = '$donor_name', donor_number = '$donor_number' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index2.php');

?>