<?php 
include_once 'header.php';
?>



<h3 class="profileedit-text text-center">Update Profile</h3>

<div class="profileedit container-fluid">
    <div class="profileedit-container conainer">
        <div class="profileedit-form-container">

        <form class="profileedit-form" action="inc/profileEdit.inc.php" method="POST">
        
        <input class="profileedit-form-input" type="text" name="uname" placeholder="Username" value="<?php echo $_SESSION['u_uname'] ?>" required="required">
        <input class="profileedit-form-input" type="text" name="first" placeholder="First Name" value="<?php echo $_SESSION['u_first'] ?>" required="required">
        <input class="profileedit-form-input" type="text" name="last" placeholder="Last Name" value="<?php echo $_SESSION['u_last'] ?>" required="required">
        <input class="profileedit-form-input" type="text" name="email" placeholder="E-mail"
        value="<?php echo $_SESSION['u_email'] ?>" required="required">
        <input class="profileedit-form-input" type="text" name="phone" placeholder="Phone Number" value="<?php echo $_SESSION['u_phone'] ?>" required="required">
        <select type="text" name="position" class="profileedit-form-input">
            <option value="student">Student</option>
            <option value="staff">Staff</option>
        </select>
        <button class="profileedit-form-input-btn" type="submit" name="submit">update</button>
    </form>
    </div>
        
    </div>
    
</div>