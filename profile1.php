<?php 

include_once 'header.php';
include_once 'inc/dbh.inc.php';

if (!isset($_SESSION['u_email'])) {
    header("location:login.php");
    exit();
}

    $id=$_SESSION['u_id'];
    $sql="SELECT * FROM users WHERE user_id=$id;";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
?>
<div>
    

<section class="profile-container-main">
    <div class="profile-container-text text-center">
        <h4>Profiile Information</h4>
    </div>
<div class="profile-container container-fluid">
    
    <div class="profile-body container">
        <div class="profile-pic">
       
        
            <img src="uploads/<?php echo $row['image']?>">  
        
        </div>
        <div><form class="picture-form" method="POST" action="imgupload.php" enctype="multipart/form-data">
            <div class="form-group">
            <!--<label for="exampleInputFile">Add Profile Picture</label>-->
            <input name="photo" type="file" id="exampleInputFile">
            <button type="submit" name="imgSubmit" class="btn btn-default">Upload</button>
        </form></div>

        <div class="profile-info">
            <ul class="profile-info-list pull-left">
                <li><h4>ID: <?php echo $_SESSION['u_uname']; ?> </h4></li>
                <li><h4>First Name: <?php echo $_SESSION['u_first']; ?> </h4></li>
                <li><h4>Last Name: <?php echo $_SESSION['u_last']; ?> </h4></li>
                <li><h4>E-mail: <?php echo $_SESSION['u_email']; ?> </h4></li>
                <li><h4>Phone: <?php echo $_SESSION['u_phone']; ?> </h4></li>
                <li><h4>Position: <?php echo $_SESSION['u_position']; ?> </h4></li>
                <li><h4>Balance: <?php echo $row['user_balance']; ?></h4></li>
            </ul>    

        </div>

    </div>
 
</div>
        <div>
        <a class="profileUpdate-btn" href="profileUpdate.php">Update Profile</a>
        </div>
</section>

<?php include 'footer.php'; ?>