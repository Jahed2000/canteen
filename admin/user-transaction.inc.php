<?php 
include_once 'inc/header.php';
include_once '../inc/dbh.inc.php';



if (isset($_POST['submit'])) {
    $user_id=$_GET['id'];
    $balance=$_POST['balance'];
    
    $sql="SELECT * FROM users WHERE user_id='$user_id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $oldBal=$row['user_balance'];
    $newBal=$oldBal+$balance;
    
$sqlBal="UPDATE users SET user_balance='$newBal' WHERE user_id='$user_id'";

$resultBal=mysqli_query($conn,$sqlBal);

header("location:user-transaction.php?success");
exit();
}
