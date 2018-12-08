<?php
if (empty($_SESSION['admin_email']))
    session_start();
if (!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email'])) {
    header('location:login.php');
}
include 'inc/header.php';

include '../inc/dbh.inc.php';

$result1=mysqli_query($conn,"SELECT * FROM users");



?>

    <!--In Which Page We Are Name Section Start-->
    <div class="main-bar">
        <h3>
            <i class="fa fa-user">recharge balance</i>&nbsp;
        </h3>
    </div>
    <!--In Which Page We Are Name Section End-->

<?php include 'inc/sidebar.php'; ?>


    <!--Main Body Content Section Start-->
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <div class="row">
                     
                    <table class="total-user-table" border="1">
                        <tr>
                            <thead>
                            <th>ID</th>
                            <th>Campus ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Balance</th>
                            <th>Action</th>

                            </thead>
                        </tr>

                        <tbody>
                          <?php while ($row1=mysqli_fetch_assoc($result1)) { ?>  
                        
                        <tr>
                           
                            <td><?php echo $row1['user_id']; ?></td>
                            <td><?php echo $row1['user_uname']; ?></td>
                            <td><?php echo $row1['user_first']; ?></td>
                            <td><?php echo $row1['user_last']; ?></td>
                            <td><?php echo $row1['user_email']; ?></td>
                            <td><?php echo $row1['user_phone']; ?></td>
                            <td><?php echo $row1['user_position']; ?></td>
                            <td><?php echo $row1['user_balance']; ?></td>
                            <td>
                               
                                <a href="#recharge<?php echo $row1['user_id'];?>"" type="button" class="btn btn-success" data-toggle="modal">recharge</a>
                            </td>
                            
                            
                        </tr> 
                    
                


                        <!-- MODAL -->
  <div class="modal fade" tabindex="-1" role="dialog" id="recharge<?php echo $row1['user_id'];?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="color: black;" class="modal-title">Enter amount to recharge to <?php echo $row1['user_uname'];?></h4>
          
      </div>
      <div class="modal-body">
        <form method="POST" action="user-transaction.inc.php?id=<?php echo $row1['user_id'];?>">
          <div class="form-group">
            <input name="balance" type="text" class="recharge-modal-input" />
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
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!--Main Body Content Section End-->
<?php include 'inc/footer.php'; ?>