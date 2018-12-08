<?php
include_once 'header.php';
include_once 'inc/slider.php';

$sql1="SELECT * FROM item;";
$result1=mysqli_query($conn,$sql1);

?>

<section class="container-fluid" id="body-text">
    <div class="container">
        <div class="row">
            <h1>Bangladesh No#1 Auction Bidding Platform</h1>
            <p>
                100% Risk free online auction, win or buy branded new products at up to 89% huge discount
                5 free credits on sign up, worldwide shipping, latest gadgets, click to bid easy auction's
                40000+ members, 10000+ completed auction's, always fair auction guaranteed.
            </p>
            <a href='login.php'>
                <button type="button" class="btn btn-danger" id="join-now-btn">JOIN NOW</button>
            </a>
        </div>
    </div>
</section>


    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <?php while($row1=mysqli_fetch_assoc($result1)) { ?>
                <div class="item-container text-center col-sm-3 col-md-3 col-lg-3">
                    <div class="item-container-name1">
                    <strong class="item-container-name"><?php echo $row1['item_name']; ?></strong>
                    </div>
                    <div class="item-container-image">
                    <img src="admin/uploads/<?php echo $row1['item_image']; ?>">
                    </div>
                    <div class="item-container-footer">
                    <h4><?php echo $row1['item_price']." "."tk"; ?></h4>
                    <?php if (!isset($_SESSION['u_email'])) { ?>
                    
                    <a type="button" class="btn btn-success" href="login.php">buy</a>
                    <?php } else { ?> 
                    <a type="button" data-toggle="modal" class="btn btn-success" href="#item<?php echo $row1['item_id'];?>">add to cart</a>
                    <?php } ?>
                    </div>
                </div>
<!--MODAL-->                
<div class="modal fade" tabindex="-1" role="dialog" id="item<?php echo $row1['item_id'];?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: black;" class="modal-title">How many<?php echo " ". $row1['item_name'];?> ?</h4>
          
      </div>
      <div class="modal-body">
        <form method="POST" action="add-cart.inc.php?id=<?php echo $row1['item_id'];?>">
          <div class="form-group">
            <input name="amount" type="number" value="1" class="recharge-modal-input" />
              <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                <?php } ?>
            </div>
            
        </div>
        
    </div>

<?php include 'footer.php'; ?>