<?php
session_start();
include_once 'inc/dbh.inc.php';
if (isset($_POST['submit'])) {

$itemID=$_GET['id'];
$userID= $_SESSION['u_id'];
$userName= $_SESSION['u_uname'];
$amount=$_POST['amount'];

$sqlItem="SELECT * FROM item WHERE item_id='$itemID'";
$resultItem=mysqli_query($conn,$sqlItem);

$rowItem=mysqli_fetch_assoc($resultItem);

$itemName= $rowItem['item_name'];
$itemPrice= $rowItem['item_price'];

$resultCart=mysqli_query($conn,"INSERT INTO cart (cart_uid,cart_uname,cart_item,cart_price,cart_amount) VALUES ('$userID','$userName','$itemName','$itemPrice','$amount')");

header("location:cart.php?success");
exit();
}
