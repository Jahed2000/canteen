<?php
session_start();
include_once '../inc/dbh.inc.php';

if (isset($_POST['submit'])) {
	
	
	

	$email=$_POST['email'];
	$pwd=$_POST['password'];

	//error handlers
	
	$sql="SELECT * FROM admin WHERE email='$email'";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck<1) {
		header("location:login.php?email=error");
		exit();
	} else{

		if ($row=mysqli_fetch_assoc($result)) {
			
			if ($pwd!=$row['password']) {
				header("location:login.php?password=error");
				exit();
			} elseif ($pwd==$row['password']) {
				
			$_SESSION['admin_email'] = $_POST['email'];
    		$_SESSION['message']= "Welcome to BidwarBD Admin Panel";

				header("location:index.php?login=success");
				exit();
			}
		}

	}


} else{
	header("location:login.php?what");
	exit();
}

