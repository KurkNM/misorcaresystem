<?php

if(isset($_SESSION['regparentsubmit'])){
	session_start();

	include_once 'dbConnect.php';

	//cl_id for both Mother and Father
	$momdadclient = $_SESSION['clientid'];

	//Collect data from regparents.php for Mother
	$momvoter = mysqli_real_escape_string($conn, $_SESSION['momvoter']);
	$momlname = mysqli_real_escape_string($conn, $_SESSION['momlname']);
	$momfname = mysqli_real_escape_string($conn, $_SESSION['momfname']);
	$mommname = mysqli_real_escape_string($conn, $_SESSION['mommname']);
	$momsuffix = mysqli_real_escape_string($conn, $_SESSION['momsuffix']);
	
	//Combine to form Birthdate
	$mommonth = mysqli_real_escape_string($conn, $_SESSION['mommonth']);
	$momday = mysqli_real_escape_string($conn, $_SESSION['momday']);
	$momyear = mysqli_real_escape_string($conn, $_SESSION['momyear']);
	if($mommonth == "January"){
	$mombirthmonth = "01";
	} else if($mommonth == "February"){
		$mombirthmonth = "02";
	} else if($mommonth == "March"){
		$mombirthmonth = "03";
	} else if($mommonth == "April"){
		$mombirthmonth = "04";
	} else if($mommonth == "May"){
		$mombirthmonth = "05";
	} else if($mommonth == "June"){
		$mombirthmonth = "06";
	} else if($mommonth == "July"){
		$mombirthmonth = "07";
	} else if($mommonth == "August"){
		$mombirthmonth = "08";
	} else if($mommonth == "September"){
		$mombirthmonth = "09";
	} else if($mommonth == "October"){
		$mombirthmonth = "10";
	} else if($mommonth == "November"){
		$mombirthmonth = "11";
	} else if($mommonth == "December"){
		$mombirthmonth = "12";
	}
	$mombirthdate = $momyear."-".$mombirthmonth."-".$momday;
	$momgender = "Female";
	$momtype = "Mother";

	//Check if Mother has input
	if(!empty($momfname) $$ !empty($momlname)){
		//Input Mother details to database
		$momsql = "INSERT INTO beneficiary (be_voters_id, be_fname, be_mname, be_lname, be_suffix, be_gender, be_birthdate, be_type, cl_id) VALUES ('$momvoter', '$momfname', '$mommname', '$momlname', '$momsuffix', '$momgender', '$mombirthdate', '$momtype', '$momdadclient');";
	}

	mysqli_query($conn, $momsql);


	//Collect data from regparents.php for Father
	$dadvoter = mysqli_real_escape_string($conn, $_SESSION['dadvoter']);
	$dadlname = mysqli_real_escape_string($conn, $_SESSION['dadlname']);
	$dadfname = mysqli_real_escape_string($conn, $_SESSION['dadfname']);
	$dadmname = mysqli_real_escape_string($conn, $_SESSION['dadmname']);
	$dadsuffix = mysqli_real_escape_string($conn, $_SESSION['dadsuffix']);
	
	//Combine to form Birthdate
	$dadmonth = mysqli_real_escape_string($conn, $_SESSION['dadmonth']);
	$dadday = mysqli_real_escape_string($conn, $_SESSION['dadday']);
	$dadyear = mysqli_real_escape_string($conn, $_SESSION['dadyear']);
	if($dadmonth == "January"){
	$dadbirthmonth = "01";
	} else if($dadmonth == "February"){
		$dadbirthmonth = "02";
	} else if($dadmonth == "March"){
		$dadbirthmonth = "03";
	} else if($dadmonth == "April"){
		$dadbirthmonth = "04";
	} else if($dadmonth == "May"){
		$dadbirthmonth = "05";
	} else if($dadmonth == "June"){
		$dadbirthmonth = "06";
	} else if($dadmonth == "July"){
		$dadbirthmonth = "07";
	} else if($dadmonth == "August"){
		$dadbirthmonth = "08";
	} else if($dadmonth == "September"){
		$dadbirthmonth = "09";
	} else if($dadmonth == "October"){
		$dadbirthmonth = "10";
	} else if($dadmonth == "November"){
		$dadbirthmonth = "11";
	} else if($dadmonth == "December"){
		$dadbirthmonth = "12";
	}
	$dadbirthdate = $dadyear."-".$dadbirthmonth."-".$dadday;
	$dadgender = "Male";
	$dadtype = "Father";

	//check if Father has input
	if(!empty($dadfname) && !empty($dadlname)){
		//Input Mother details to database
		$dadsql = "INSERT INTO beneficiary (be_voters_id, be_fname, be_mname, be_lname, be_suffix, be_gender, be_birthdate, be_type, cl_id) VALUES ('$dadvoter', '$dadfname', '$dadmname', '$dadlname', '$dadsuffix', '$dadgender', '$dadbirthdate', '$dadtype', '$momdadclient');";
	}

	mysqli_query($conn, $dadsql);


	header("Location: ../registerClient.php");
	exit();
}