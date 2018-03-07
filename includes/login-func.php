<?php

session_start();

if(isset($_POST['login'])){

	include 'dbConnect.php';

	$uid = mysqli_real_escape_string($conn, $_POST['loginUsername']);
	$pwd = mysqli_real_escape_string($conn, $_POST['loginPassword']);

	//error handlers
	if(empty($uid) || empty($pwd)){
		header("Location: ../index.php?login=empty");
		exit();
	} else{
		$sql = "SELECT * FROM employee WHERE emp_username='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../login.php?login=error");
			exit();
		}
		else{
			if($row = mysqli_fetch_assoc($result)){
				//de-hash password
				$hashedPwdCheck = password_verify($pwd, $row['emp_password']);
				if($hashedPwdCheck == false){
					header("Location: ../login.php?login=error");
				}
				else if($hashedPwdCheck == true){
					//login user
					$_SESSION['e_id'] = $row['emp_id'];
					$_SESSION['e_fname'] = $row['emp_fname'];
					$_SESSION['e_lname'] = $row['emp_lname'];
					$_SESSION['e_mname'] = $row['emp_mname'];
					$_SESSION['e_username'] = $row['emp_username'];
					$_SESSION['e_email'] = $row['emp_email'];
					$_SESSION['e_barangay'] = $row['emp_barangay'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
} else{
	header("Location: ../login.php?login=error");
	exit();
}