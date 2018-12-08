<?php 
include_once 'inc/header.php';
include_once '../inc/dbh.inc.php';
$id=$_GET['id'];


if (isset($_POST['submit'])) {

$name=$_POST['name'];
$desc=$_POST['desc'];
$price=$_POST['price'];
	
$sql="UPDATE item SET item_name='$name',item_desc='$desc',item_price='$price' WHERE item_id='$id' ";

$result=mysqli_query($conn,$sql);
header("location:update-item.php?success");
}

if(isset($_POST['imgsubmit']))
{
    
    $uploaddir = 'uploads/';
    
    // Name of the Uploaded Photo
    $name = $_FILES['photo']['name']; 
    
    // The Final Path Where the Photo will be Stored
    $uploadfile = $uploaddir . $name;

    
    // Taking User ID from SESSION
    

    // If The Upload is Successfull
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        
        // Inserting Data into Database 
        $sql="UPDATE item SET item_image='$name' WHERE item_id='$id'";
        $result=mysqli_query($conn,$sql);
        //$mysqli->query("UPDATE users SET image='$name' WHERE user_id='$id'");
        $success = "Successfully Uploaded.";
header("location: update-item.php?success");
exit();
    }
}
