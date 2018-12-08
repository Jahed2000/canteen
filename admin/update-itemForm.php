<?php
if (empty($_SESSION['admin_email']))
    session_start();
if (!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email'])) {
    header('location:login.php');
}
include 'inc/header.php';

include '../inc/dbh.inc.php';

$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM item WHERE item_id='$id'");
$row=mysqli_fetch_assoc($result);
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
                <div class="row item-form">
                     
                    <h2>Add Item</h2>
    <form class="item-form text-center" action="update-itemForm.inc.php?id=<?php echo $row['item_id']; ?>" method="POST" enctype="multipart/form-data">
        <img src="uploads/<?php echo $row['item_image']; ?>">
        <button type="submit" name="imgsubmit">update photo</button>
        <input name="photo" type="file" style="margin: 0 auto;">
        <input class="item-form-input" type="text" name="name" placeholder="Item Name" required="required" value="<?php echo $row['item_name']; ?>">
        <textarea class="item-form-input" type="text" name="desc" placeholder="Description" required="required" ><?php echo $row['item_desc']; ?></textarea>
        <input class="item-form-input" type="number" name="price" placeholder="Price" required="required" value="<?php echo $row['item_price']; ?>">
        
        <button class="item-form-input-btn" type="submit" name="submit">update item</button>
        
    </form>
                </div>

            </div>
        </div>
    </div>
    <!--Main Body Content Section End-->
<?php include 'inc/footer.php'; ?>