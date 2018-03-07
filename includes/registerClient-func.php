<?php

if(isset($_POST['regclientsubmit'])){
	session_start();

	include_once 'dbConnect.php';
	//sample
//	$_SESSION['clientlnamefirstsave'] = $_POST['clientlname'];

	//Here, we take the data from registerClient.php
	$clientvoter = mysqli_real_escape_string($conn, $_POST['clientvoter']);
	$clientlname = mysqli_real_escape_string($conn, $_POST['clientlname']);
	$clientfname = mysqli_real_escape_string($conn, $_POST['clientfname']);
	$clientmname = mysqli_real_escape_string($conn, $_POST['clientmname']);
	$clientsuffix = mysqli_real_escape_string($conn, $_POST['clientsuffix']);
	$clientcell = mysqli_real_escape_string($conn, $_POST['clientcell']);

	//To make our Birthdate
	$clientmonth = mysqli_real_escape_string($conn, $_POST['clientmonth']);
	$clientday = mysqli_real_escape_string($conn, $_POST['clientday']);
	$clientyear = mysqli_real_escape_string($conn, $_POST['clientyear']);
	if($clientmonth == "January"){
		$clientbirthmonth = "01";
	} else if($clientmonth == "February"){
		$clientbirthmonth = "02";
	} else if($clientmonth == "March"){
		$clientbirthmonth = "03";
	} else if($clientmonth == "April"){
		$clientbirthmonth = "04";
	} else if($clientmonth == "May"){
		$clientbirthmonth = "05";
	} else if($clientmonth == "June"){
		$clientbirthmonth = "06";
	} else if($clientmonth == "July"){
		$clientbirthmonth = "07";
	} else if($clientmonth == "August"){
		$clientbirthmonth = "08";
	} else if($clientmonth == "September"){
		$clientbirthmonth = "09";
	} else if($clientmonth == "October"){
		$clientbirthmonth = "10";
	} else if($clientmonth == "November"){
		$clientbirthmonth = "11";
	} else if($clientmonth == "December"){
		$clientbirthmonth = "12";
	}
	$clientbirthdate = $clientyear."-".$clientbirthmonth."-".$clientday;
	
	$clientgender = mysqli_real_escape_string($conn, $_POST['clientgender']);
	$clientcivil = mysqli_real_escape_string($conn, $_POST['clientcivil']);
	$clientmunicipality = mysqli_real_escape_string($conn, $_POST['clientmunicipality']);
	$clientaddress = mysqli_real_escape_string($conn, $_POST['clientaddress']);
	$clientzipcode = mysqli_real_escape_string($conn, $_POST['clientzipcode']);
	$clientincome = mysqli_real_escape_string($conn, $_POST['clientincome']);

	//Choose Source of Income
	$clientsource = mysqli_real_escape_string($conn, $_POST['clientsource']);
	$clientother = mysqli_real_escape_string($conn, $_POST['clientother']);
	if($clientsource == "Other"){
		$clientsourceofincome = $clientother;
	} else{
		$clientsourceofincome = $clientsource;
	}

	//Para sa source of Water
	if(isset($_POST['springwater'])){
		$clientwatersource = "Spring/Communal/Deep Well";
	} else if(isset($_POST['communalwater'])){
		$clientwatersource = "Communal/Faucet";
	} else if(isset($_POST['housewater'])){
		$clientwatersource = "Household Water";
	} else if(isset($_POST['peddlerwater'])){
		$clientwatersource = "Peddler";
	}

	$clienthouse = mysqli_real_escape_string($conn, $_POST['clienthouse']);
	$clienttoilet = mysqli_real_escape_string($conn, $_POST['clienttoilet']);

	//Start Inserting data to Database
	$clientsql = "INSERT INTO misor_client (cl_voters_id, cl_fname, cl_mname, cl_lname, cl_suffix, cl_cellno, cl_birthdate, cl_gender, cl_civil_status, cl_municipality, cl_address, cl_zipcode, cl_source_of_income, cl_monthly_income, cl_source_of_water, cl_house_structure, cl_toilet_type) VALUES ('$clientvoter', '$clientfname', '$clientmname', '$clientlname', '$clientsuffix', '$clientcell', '$clientbirthdate', '$clientgender', '$clientcivil', '$clientmunicipality', '$clientaddress', '$clientzipcode', '$clientsourceofincome', '$clientincome', '$clientwatersource', '$clienthouse', '$clienttoilet');";

	mysqli_query($conn, $clientsql);

	//Take the number of rows to get the latest cl_id which is AutoIncremented
	$clientlength = "SELECT * FROM misor_client"; 
	$clientresult = mysqli_query($conn, $clientlength);
	$clientnumrows = mysqli_num_rows($clientresult);
	//Take Note:
	//The cl_id is equal to $clientnumrows
	//Put $clientnumrows to a $_SESSION
	$_SESSION['clientid'] = $clientnumrows;

	//Add the Dependent: Husband/Wife
	$hwvoter = mysqli_real_escape_string($conn, $_POST['hwvoter']);
	$hwlname = mysqli_real_escape_string($conn, $_POST['hwlname']);
	$hwfname = mysqli_real_escape_string($conn, $_POST['hwfname']);
	$hwmname = mysqli_real_escape_string($conn, $_POST['hwmname']);
	$hwsuffix = mysqli_real_escape_string($conn, $_POST['hwsuffix']);
	$hwpob = mysqli_real_escape_string($conn, $_POST['hwpob']);
	$hwgender = mysqli_real_escape_string($conn, $_POST['hwgender']);

	//To make our Birthdate
	$hwmonth = mysqli_real_escape_string($conn, $_POST['hwmonth']);
	$hwday = mysqli_real_escape_string($conn, $_POST['hwday']);
	$hwyear = mysqli_real_escape_string($conn, $_POST['hwyear']);
	if($hwmonth == "January"){
		$hwbirthmonth = "01";
	} else if($hwmonth == "February"){
		$hwbirthmonth = "02";
	} else if($hwmonth == "March"){
		$hwbirthmonth = "03";
	} else if($hwmonth == "April"){
		$hwbirthmonth = "04";
	} else if($hwmonth == "May"){
		$hwbirthmonth = "05";
	} else if($hwmonth == "June"){
		$hwbirthmonth = "06";
	} else if($hwmonth == "July"){
		$hwbirthmonth = "07";
	} else if($hwmonth == "August"){
		$hwbirthmonth = "08";
	} else if($hwmonth == "September"){
		$hwbirthmonth = "09";
	} else if($hwmonth == "October"){
		$hwbirthmonth = "10";
	} else if($hwmonth == "November"){
		$hwbirthmonth = "11";
	} else if($hwmonth == "December"){
		$hwbirthmonth = "12";
	}
	$hwbirthdate = $hwyear."-".$hwbirthmonth."-".$hwday;

	//Check if Husband or Wife
	if($hwgender == "Male"){
		$hwtype = "Husband";
	} else if($hwgender == "Female"){
		$hwtype = "Wife";
	}

	//Check if there is a Husband/Wife input
	if(!empty($hwfname) && !empty($hwlname)){
		//Add Husband/Wife to the Database
		$hwsql = "INSERT INTO beneficiary (be_voters_id, be_fname, be_mname, be_lname, be_suffix, be_place_of_birth, be_gender, be_birthdate, be_type, cl_id) VALUES ('$hwvoter', '$hwfname', '$hwmname', '$hwlname', '$hwsuffix', '$hwpob', '$hwgender', '$hwbirthdate', '$hwtype', '$clientnumrows');";

		mysqli_query($conn, $hwsql);
	} 

	header("Location: ../nextchildreg.php");
	exit();

} else {
	echo "No Submission";
	exit();
}