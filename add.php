<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$blood_available = $_POST['blood_available'];
		$blood_number = $_POST['blood_number'];
		$donor_name = $_POST['donor_name'];
		$donor_number = $_POST['donor_number'];
		$sql = "INSERT INTO members (blood_available, blood_number, donor_name,donor_number ) VALUES ('$blood_available', '$blood_number', '$donor_name' , '$donor_number')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index2.php');