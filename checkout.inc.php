<?php
session_start();
include_once 'inc/dbh.inc.php';

if (isset($_POST['submit'])) {

date_default_timezone_set("Asia/Dhaka");
$time=date('d-m-Y H:i:s',time());


$oldbal=$_SESSION['u_balance'];


$id=$_SESSION['u_id'];

$total=$_SESSION['u_total'];
$newbal=$oldbal-$total;


$resultBal=mysqli_query($conn,"UPDATE users SET user_balance='$newbal' WHERE user_id='$id'");

$resultCart=mysqli_query($conn,"UPDATE cart SET cart_total='$total',cart_order='1',cart_ordertime='$time' WHERE cart_uid='$id' AND cart_order is null");

$resultUser=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$id'");

$row=mysqli_fetch_assoc($resultUser);

$_SESSION['u_balance']=$row['user_balance'];


header("location:cart.php?seccess");
exit();

}
