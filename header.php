<?php
session_start();
include_once 'inc/dbh.inc.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Canteen Management System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/assets/font-awesome.min.css" />
    <!--additional-->
    <link href="css/assets/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/assets/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/assets/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- additional over-->
</head>
<div>
<body style="background-color: #edf1f7;">

    <div class="header container-fluid">
        <div class="row header-row">
            <div class="col-sm-6 logo">
                <a href="index.php"><img src="images/CanteenWhite.png"></a>
            </div>
            <div class="col-sm-6">
<?php
                    if (!isset($_SESSION['u_email'])) { ?>
                <ul class="menu pull-right list-inline">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile1.php">Profile</a></li>
                    <li><a href="#">About</a></li>
                    
                    <li><a href="login.php">Login</a></li>
                     
                    
                
                </ul>
<?php } else{ ?>
                <ul class="menu pull-right list-inline">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile1.php">Profile</a></li>
                    <li><a href="#">About</a></li>
                   
                    
                     
                    <li><form method="POST" action="inc/logout.inc.php" ><button class="logout-btn" name="submit" type="submit">Logout</button></form></li>
                
                </ul><?php } ?>
            </div>
        </div>
        
    </div>

<div class="header-foot">
    <div class="row header-row2">
        <div class="social col-sm-6">
            <ul class="social-icons list-inline">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>       
        </div>
        <div class="col-sm-6">
            <ul class="foot-li list-inline">
                <li>
                    <?php if (isset($_SESSION['u_id'])) { ?>
                   <div class="foot-li1">
                    
                        <p>balance: <?php echo $_SESSION['u_balance']; ?> tk</p>
                    
                         
                    </div>   
                    <?php } ?>      
                </li>
                <li class="cartt">
                    <?php if (isset($_SESSION['u_id'])) { ?>
                        <a class="cart-btn" href="cart.php"><i class="cart-icon fa fa-shopping-cart fa-1.5x"></i></a>
                    <?php } else{ ?>
                         <a class="cart-btn" href="login.php"><i class="cart-icon fa fa-shopping-cart fa-1.5x"></i></a>
                    <?php } ?>
                            
                </li>
            </ul>
           
             
            
        </div>        
    </div>   
</div>