<?php 
include_once 'inc/header.php';
include_once '../inc/dbh.inc.php';



if (isset($_POST['submit'])) {
	$item_id=$_GET['id'];
	
$sql="DELETE FROM item WHERE item_id='$item_id' ";

$result=mysqli_query($conn,$sql);
header("location:delete-item.php?success");
exit();
}
