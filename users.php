<?php 
include_once 'header.php';
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

?>

<div>
    <?php while ($row=mysqli_fetch_assoc($result)) { ?>
    
    <p><?php echo $row['user_uname']; ?></p> <form method="POST" action="delete-user.php?id=<?php echo $row['user_id']; ?>"><button type="submit" class="user-delete-btn" name="submit">delete</button></form>
    <?php } ?>  
    

</div>

<a href="index.php?sdaslkd">sda</a>

