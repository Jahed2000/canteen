<?php 
include_once 'header.php';
include_once 'inc/dbh.inc.php';



if (isset($_POST['submit'])) {
	$user_id=$_GET['id'];
	
$sql="DELETE FROM users WHERE user_id='$user_id' ";

$result=mysqli_query($conn,$sql);
header("location:users.php?success");
exit();
}
