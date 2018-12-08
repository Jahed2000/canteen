<?php
if (empty($_SESSION['admin_email']))
    session_start();
if (!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email'])) {
    header('location:login.php');
}
include 'inc/header.php';

include '../inc/dbh.inc.php';
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

?>

    <!--In Which Page We Are Name Section Start-->
    <div class="main-bar">
        <h3>
            <i class="fa fa-user">delete users</i>&nbsp;
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

                        
                          <?php while ($row=mysqli_fetch_assoc($result)) { ?>  
                        
                        <tr>
                           
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['user_uname']; ?></td>
                            <td><?php echo $row['user_first']; ?></td>
                            <td><?php echo $row['user_last']; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_phone']; ?></td>
                            <td><?php echo $row['user_position']; ?></td>
                            <td><?php echo $row['user_balance']; ?></td>
                            <td><form action="delete-users.inc.php?id=<?php echo $row['user_id']; ?>" method="POST">
                                <button class="btn btn-warning" type="submit" name="submit">Delete</button>
                                </form>
                            </td>
                            
                            
                        </tr> <?php } ?>
                    </table> 
                </div>

            </div>
        </div>
    </div>

   
    <!--Main Body Content Section End-->
<?php include 'inc/footer.php'; ?>