<?php 
include_once 'header.php';
include_once 'inc/dbh.inc.php';


$sql1="SELECT * FROM users WHERE user_id='1'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
$bal=$row1['user_balance'];
$newbal=$bal+100;?>
?>
<h2>ww<?php echo $newbal; ?> </h2>



