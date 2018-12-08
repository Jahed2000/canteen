<?php 
include_once 'header.php';
?>




<div class="container-fluid">
    <div class="row">

           
<div class="col-sm-4 col-sm-4-offset">
<div class="login-form text-center">
 <h2>Login</h2>
    <form action="inc/login.inc.php" method="POST">
        <input class="login-form-input" type="text" name="email" placeholder="E-mail" required="required">
        <input class="login-form-input" type="password" name="pwd" placeholder="password" required="required">
        <button class="login-form-input-btn" type="submit" name="submit">login</button>
        <a href="signup.php">signup</a>
    </form>

    </div>
        </div>
</div>
</div>
<div class="footer text-center">
    <strong>&copy; 2018 <a href="index.php" href="#" title="Bid War Bd">Canteen Management System</a>. All Rights Reserved.
                        <p>Design &amp; Developed By <a href="https://www.facebook.com/titul.chandra.75">Titul Chandra</a>.</p></strong>
</div>