<?php 
include_once 'inc/header.php';
include_once '../inc/dbh.inc.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    // Name of the Upload Folder
    $uploaddir = 'uploads/';
    
    // Name of the Uploaded Photo
    $imgname = $_FILES['photo']['name']; 
    
    // The Final Path Where the Photo will be Stored
    $uploadfile = $uploaddir . $imgname;

    
    // Taking User ID from SESSION
    

    // If The Upload is Successfull
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        
        // Inserting Data into Database 
        $sql="INSERT INTO item (item_name,item_desc,item_image,item_price) VALUES ('$name','$desc','$imgname','$price')";
        $result=mysqli_query($conn,$sql);
        
header("location: add-item.php?success");
exit();
    } 
    else {
        $error = "Upload Failed! Please Try Again.";
    }
  
}
