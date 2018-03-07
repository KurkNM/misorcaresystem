<?php

if(isset($_POST['submit'])){
	
	include_once 'dbConnect.php';

	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$mname = mysqli_real_escape_string($conn, $_POST['mname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//error handlers
	//check for empty fields
	if(empty($fname) || empty($mname) || empty($lname) || empty($barangay) || empty($email) || empty($username) || empty($password)){
		header("Location: ../register.php?signup=empty");
		exit();
	}else{
		//check if input chars are valid
		if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $mname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
			header("Location: ../register.php?signup=invalid");
			exit();
		}else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../register.php?signup=invalid%20email");
				exit();
			}else{
				$sql = "SELECT * FROM employee WHERE emp_username='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0){
					header("Location: ../register.php?signup=username_is_unavailable");
					exit();
				} else{
					//hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//insert user inside the db
					$sql = "INSERT INTO employee (emp_lname, emp_fname, emp_mname, emp_barangay, emp_username, emp_password, emp_email) VALUES ('$lname', '$fname', '$mname', '$barangay', '$username', '$hashedPwd', '$email');";

					mysqli_query($conn, $sql);
					header("Location: ../register.php?signup=signup_successful");
					exit();
				}
			}
		}
	}

} else{
	header("Location: ../register.php");
	exit();
}