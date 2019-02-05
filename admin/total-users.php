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

if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $q = "SELECT * FROM users WHERE user_uname LIKE '$id' " ;

    $result = mysqli_query($conn,$q);
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


    <!--Main Body Content Section Start-->
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">

                <form style="margin: 20px 0 0 20px ;" method="POST" class="form-inline my-2 my-lg-0">
                  <input name="id" class="form-control mr-sm-2" type="text" placeholder="Search ID">
                  <button name="submit" class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
                
                <div class="row">
                     
                    <table class="total-user-table" border="2">
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
                            
                            
                        </tr> <?php } ?>
                    </table> 
                </div>

            </div>
        </div>
    </div>
    <!--Main Body Content Section End-->
<?php include 'inc/footer.php'; ?>