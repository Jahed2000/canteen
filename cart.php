<?php 

include_once 'header.php';
include_once 'inc/dbh.inc.php';

$uid=$_SESSION['u_id'];
$result=mysqli_query($conn,"SELECT * FROM cart WHERE cart_uid='$uid' AND cart_order is null");
$total=0;
$bal=$_SESSION['u_balance'];



?>

<div class="cart container">
    <div class="text-center"><h2>cart</h2></div>
    <div class="container-fluid">
        <div class="cart-parent">
        <?php while ($row=mysqli_fetch_assoc($result)) { ?>
    <div class="row cart-row">
        <div class="cart-container">
            <div class="col-sm-3 text-center">
                <h4>item:<?php echo " ".$row['cart_item'];?></h4>
            </div>
            <div class="col-sm-3 text-center">
                <h4>amount:<?php echo " ".$row['cart_amount']; ?></h4>    
            </div>
            <div class="col-sm-3 text-center">
                <h4>price: <?php echo $row['cart_price']*$row['cart_amount']." "."taka"; ?></h4>
            </div>
            <div class="col-sm-3 text-center">
                <a class="cart-remove-btn" type="button" href="cart-remove.inc.php?id=<?php echo $row['cart_id']; ?>">remove</a>
            </div>
            
            <?php $total=$total+($row['cart_price']*$row['cart_amount']);
             ?>
        </div>
    </div>
        <?php } 
        $_SESSION['u_total']=$total; 
        ?>
</div>
    </div>
    	<?php if (!empty($_SESSION['u_total'])) { ?>
    		
        <div class="total text-center">
            <div class="total-price text-center">
                <h4>TOTAL:<?php echo $_SESSION['u_total'] ?></h4>
            </div>  
            <div>
                <form method="POST" action="checkout.inc.php"><button type="submit" name="submit">checkout</button></form>
            </div>
        </div> 
    <?php } else{ ?>
    	<div class="cart-empty text-center" style="background-color:#edf1f7;min-height: 300px; ">
    		<p style="color: grey;">you have no item in cart</p>
    	</div>
    <?php } ?>
</div>
<?php
date_default_timezone_set("Asia/Dhaka");
$time=date('d-m-Y H:i:s',time())
?>

<?php include 'footer.php'; ?>