<?php include 'header.php';




include 'inc/dbh.inc.php';
$sql1="SELECT * FROM users";
$result1=mysqli_query($conn,$sql1);



?>

    <!--In Which Page We Are Name Section Start-->
    <div class="main-bar">
        <h3>
            <i class="fa fa-user">delete users</i>&nbsp;
        </h3>
    </div>
    <!--In Which Page We Are Name Section End-->




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
                                <? $u_id=$row1[user_id]; ?>
                                <a data-target="#bal<?php echo $row1['user_id'];?>" class="btn btn-warning" data-toggle="modal" >Upload New Photo<?php echo $row1['user_id']; ?></a>
                            </td>
                            
                            
                        </tr> <?php } ?>
                    </table> 
                </div>

            </div>
        </div>
    </div>


<div class="modal fade" tabindex="-1" role="dialog" id="bal<?php echo $row1['user_id'];?>">
  <div class="modal-dialog" role="document" > 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: black;"> Upload New Photo<?php echo $row1['user_id']; ?> </h4>
          <p style="color:black;">sd<?echo $row1['user_id'];?></p>
      </div>
      <div class="modal-body">
        <a href="user-transaction.inc.php?id=<?php echo $row1['user_id']; ?>">sdiufshhf</a>
        <form method="post" action="user-transaction.php?id=<?php echo $row1['user_id']; ?>" >
          <div class="form-group">
            <input name="balance" type="text" class="form-control" />
              <button type="submit" name="submit" class="btn btn-primary">Upload</button>
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
  
    <!--Main Body Content Section End-->
