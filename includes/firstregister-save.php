<?php

if(isset($_POST['firstreg'])){
	session_start();
	$_SESSION['clientlnamefirstsave'] = $_POST['clientlname'];
	header("Location: ../nextchildreg.php");
	exit();
} else {
	exit();
}