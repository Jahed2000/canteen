<?php 
include_once 'header.php';

if(isset($_POST['imgSubmit']))
{
    include_once 'inc/dbh.inc.php';
    $id=$_SESSION['u_id'];
    // Name of the Upload Folder
    $uploaddir = 'uploads/';
    
    // Name of the Uploaded Photo
    $name = $_FILES['photo']['name']; 
    
    // The Final Path Where the Photo will be Stored
    $uploadfile = $uploaddir . $name;

    
    // Taking User ID from SESSION
    

    // If The Upload is Successfull
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        
        // Inserting Data into Database 
        $sql="UPDATE users SET image='$name' WHERE user_id='$id'";
        $result=mysqli_query($conn,$sql);
        //$mysqli->query("UPDATE users SET image='$name' WHERE user_id='$id'");
        $success = "Successfully Uploaded.";
header("location: profile1.php?success");
exit();
    } 
    else {
        $error = "Upload Failed! Please Try Again.";
    }
  
}
