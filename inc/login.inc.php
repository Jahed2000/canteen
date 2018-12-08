<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	

	$email=$_POST['email'];
	$pwd=$_POST['pwd'];

	//error handlers
	
	$sql="SELECT * FROM users WHERE user_email='$email'";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck<1) {
		header("location:../login.php?email=error");
		exit();
	} else{

		if ($row=mysqli_fetch_assoc($result)) {
			
			if ($pwd!=$row['user_pwd']) {
				header("location:../login.php?password=error");
				exit();
			} elseif ($pwd==$row['user_pwd']) {
				
				$_SESSION['u_id'] = $row['user_id'];
				$_SESSION['u_uname'] = $row['user_uname'];
				$_SESSION['u_first'] = $row['user_first'];
				$_SESSION['u_last'] = $row['user_last'];
				$_SESSION['u_email'] = $row['user_email'];
				$_SESSION['u_phone'] = $row['user_phone'];
				$_SESSION['u_position'] = $row['user_position'];
				$_SESSION['u_balance'] = $row['user_balance'];

				header("location:../index.php?login=success");
				exit();
			}
		}

	}


} else{
	header("location:../login.php");
	exit();
}