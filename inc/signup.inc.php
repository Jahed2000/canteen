<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

$uname=$_POST['uname'];
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$position=$_POST['position'];
$pwd=$_POST['pwd'];

if (!preg_match("/^[a-zA-Z0-9]*$/", $uname) || !preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {

	header("location:../signup.php?first");
	exit();

}  else{

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

	 	header("location:../signup.php?second");
		exit();

} else{

	$sql="SELECT * FROM users WHERE user_uname='$uname' OR user_email='$email'";
	$result= mysqli_query($conn,$sql);
	$resultCheck= mysqli_num_rows($result);

	if ($resultCheck>0) {
		$error="djaldjalk";
		header("location:../signup.php?third");
		exit();
	} else{

		$sql="INSERT INTO users (user_uname,user_first,user_last,user_email,user_phone,user_position,user_pwd,user_balance) VALUES ('$uname','$first','$last','$email','$phone','$position','$pwd','0')"; 
		$result=mysqli_query($conn,$sql);

		header("location:../index.php?success");

	}

}


} } else{
	header("
		location:../signup.php?final");
	exit();
}