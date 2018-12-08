<?php
session_start();
include_once 'inc/dbh.inc.php';

$id=$_GET['id'];

$result=mysqli_query($conn,"DELETE FROM cart WHERE cart_id='$id'");

header("location:cart.php?success");
exit();

