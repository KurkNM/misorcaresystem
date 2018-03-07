<?php

session_start();

include_once 'dbConnect.php';

//Collect data from nextchildreg.php
$childlname = mysqli_real_escape_string($conn, $_POST['childlname']);
$childfname = mysqli_real_escape_string($conn, $_POST['childfname']);
$childmname = mysqli_real_escape_string($conn, $_POST['childmname']);
$childsuffix = mysqli_real_escape_string($conn, $_POST['childsuffix']);
$childgender = mysqli_real_escape_string($conn, $_POST['childgender']);
$childpob = mysqli_real_escape_string($conn, $_POST['childpob']);

//For the Birthdate
$childmonth = mysqli_real_escape_string($conn, $_POST['childmonth']);
$childday = mysqli_real_escape_string($conn, $_POST['childday']);
$childyear = mysqli_real_escape_string($conn, $_POST['childyear']);
if($childmonth == "January"){
	$childbirthmonth = "01";
} else if($childmonth == "February"){
	$childbirthmonth = "02";
} else if($childmonth == "March"){
	$childbirthmonth = "03";
} else if($childmonth == "April"){
	$childbirthmonth = "04";
} else if($childmonth == "May"){
	$childbirthmonth = "05";
} else if($childmonth == "June"){
	$childbirthmonth = "06";
} else if($childmonth == "July"){
	$childbirthmonth = "07";
} else if($childmonth == "August"){
	$childbirthmonth = "08";
} else if($childmonth == "September"){
	$childbirthmonth = "09";
} else if($childmonth == "October"){
	$childbirthmonth = "10";
} else if($childmonth == "November"){
	$childbirthmonth = "11";
} else if($childmonth == "December"){
	$childbirthmonth = "12";
}
$childbirthdate = $childyear."-".$childbirthmonth."-".$childday;

//To see if the child is a Daughter or a Son
if($childgender == "Male"){
	$childtype = "Son";
} else if($childgender == "Female"){
	$childtype = "Daughter";
}

//for working clientid inclusion and voter id
$childclientid = $_SESSION['clientid'];
$childvoter = "";

//Add Data to DB
$childsql = "INSERT INTO beneficiary (be_fname, be_mname, be_lname, be_suffix, be_place_of_birth, be_gender, be_birthdate, be_type, cl_id) VALUES ('$childfname', '$childmname', '$childlname', '$childsuffix', '$childpob', '$childgender', '$childbirthdate', '$childtype', '$childclientid');";

mysqli_query($conn, $childsql);

//return to nextchildren.php
header("Location: ../regparents.php");
exit();