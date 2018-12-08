<?php 
include_once 'header.php';
?>




<div class="container-fluid">
    <div class="row">

        

        <div class="col-sm-4 col-sm-4-offset">
<div class="signup-form text-center">
 <h2>Signup</h2>
    <form action="inc/signup.inc.php" method="POST">
        <input class="signup-form-input" type="text" name="uname" placeholder="ID" required="required">
        <input class="signup-form-input" type="text" name="first" placeholder="First Name" required="required">
        <input class="signup-form-input" type="text" name="last" placeholder="Last Name" required="required">
        <input class="signup-form-input" type="text" name="email" placeholder="E-mail" required="required">
        <input class="signup-form-input" type="text" name="phone" placeholder="Phone Number" required="required">
        <select type="text" name="position" class="signup-form-input">
            <option value="student">Student</option>
            <option value="staff">Staff</option>
        </select>
        <input class="signup-form-input" type="password" name="pwd" placeholder="password" required="required">
        <button class="signup-form-input-btn" type="submit" name="submit">signup</button>
        <!--<a href="login.php">login</a>-->
    </form>

    </div>
        </div>
</div> 
</div>

<div class="footer text-center">
    <strong>&copy; 2018 <a href="index.php" href="#" title="Bid War Bd">Canteen Management System</a>. All Rights Reserved.
                        <p>Design &amp; Developed By <a href="https://www.facebook.com/titul.chandra.75">Titul Chandra</a>.</p></strong>
</div>

