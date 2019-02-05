<?php
if (empty($_SESSION['admin_email']))
    session_start();
if (!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email'])) {
    header('location:login.php');
}
include 'inc/header.php';

include '../inc/dbh.inc.php';

if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  //we give the value of the starting row to 0 because nothing was found in URL
  $startrow = 0;
//otherwise we take the value from the URL
} else {
  $startrow = (int)$_GET['startrow'];
}

$sql="SELECT * FROM cart WHERE cart_order is not null ORDER BY cart_id DESC LIMIT $startrow,10";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $q = "SELECT * FROM cart WHERE cart_uname LIKE '$id' " ;

    $result=mysqli_query($conn,$q);
}
?>

    <!--In Which Page We Are Name Section Start-->
    <div class="main-bar">
        <h3>
            <i class="fa fa-user"></i>&nbsp;
        </h3>
    </div>
    <!--In Which Page We Are Name Section End-->

<?php include 'inc/sidebar.php'; ?>

<style>
    .total-user-table{text-align: center;} .total-user-table th{text-align: center;}
</style>
    <!--Main Body Content Section Start-->
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">


    <form style="margin-top: 20px;" method="POST" class="form-inline my-2 my-lg-0">
      <input name="id" class="form-control mr-sm-2" type="text" placeholder="Search">
      <button name="submit" class="btn btn-secondary my-2 my-sm-0" type="submit">Search ID</button>
    </form>


                <div class="row">
                     <h2 class="text-center" style="margin: 30px">--order list--</h2>
                    <table class="total-user-table" border="2">
                        <tr>
                            <thead>
                            <th>User ID</th>
                            <th>Item</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>Time</th>
                            <th>Total</th>
                            </thead>
                        </tr>

                        
                          <?php while ($row=mysqli_fetch_assoc($result)) { ?>  
                        
                        <tr>
                           
                            <td><?php echo $row['cart_uname']; ?></td>
                            <td><?php echo $row['cart_item']; ?></td>
                            <td><?php echo $row['cart_amount']; ?></td>
                            <td><?php echo $row['cart_price']; ?></td>
                            <td><?php echo $row['cart_ordertime']; ?></td>
                            <td><?php echo $row['cart_total']; ?></td>
                        </tr> <?php } ?>
                    </table> 
                    <p><?php 
                    if ($num==10) {
                        echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+10).'">Next</a>';
                    }
                     
                        $prev = $startrow - 10;
                        //only print a "Previous" link if a "Next" was clicked
                        if ($prev >= 0)
                            echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a>';
                    ?> </p>
                </div>

            </div>
        </div>
    </div>
    <!--Main Body Content Section End-->
<?php include 'inc/footer.php'; ?>