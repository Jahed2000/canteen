<?php 
include_once '../header.php';

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';
$id=$_SESSION['u_id'];
$uname=$_POST['uname'];
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$position=$_POST['position'];


$sql="UPDATE users SET user_uname='$uname', user_first='$first', user_last='$last', user_email='$email', user_phone='$phone', user_position='$position' WHERE user_id='$id' ";

$result=mysqli_query($conn,$sql);


                $_SESSION['u_uname'] = $uname;
                $_SESSION['u_first'] = $first;
                $_SESSION['u_last'] = $last;
                $_SESSION['u_email'] = $email;
                $_SESSION['u_phone'] = $phone;
                $_SESSION['u_position'] = $position;
                

header("location:../profile1.php?success");
        exit();
 } else{
    header("location:../profile1.php?fail");
        exit();
 }