<?php
if (empty($_SESSION['admin_email']))
    session_start();
if (!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email'])) {
    header('location:login.php');
}
include 'inc/header.php';?>



    <!--In Which Page We Are Name Section Start-->
	<div class="main-bar">
		<h3>
			<i class="fa fa-home"></i>&nbsp; Home
		</h3>
	</div>
	<!--In Which Page We Are Name Section End-->
                               
<?php include 'inc/sidebar.php';?>
            
	<!--Main Body Content Section Start-->
	<div id="content">
		<div class="outer">
			<div class="inner bg-light lter">
				<div class="text-center">
					<ul class="stats_box">
						
						<li>
							<div class="stat_text">
								<i class=" fa fa-user fa-2x"></i> 	 
								<a href="total-users.php"><strong></strong>
								<small>All Users</small></a>
							</div>
						</li>
						
						<li>
							<div class="stat_text">
								<i class=" fa fa-check-circle fa-2x"></i> 	 
								<a href="user-transaction.php"><strong></strong>
								<small>User Transaction</small></a>
							</div>
						</li>
						<li>
							<div class="stat_text">
								<i class="fa fa-ban fa-2x"></i> 	 
								<a href="delete-users.php"><strong></strong>
								<small>Delete User</small></a>
							</div>
						</li>
						<li>
							<div class="stat_text">
								<i class=" fa fa-columns fa-2x"></i> 	 
								<a href="order-list.php"><strong></strong>
								<small>Order List</small></a>
							</div>
						</li>
						<li>
							<div class="stat_text">
								<i class=" fa fa-plus-square fa-2x"></i> 	 
								<a href="add-item.php"> <strong></strong>
								<small>Add Item</small></a>
							</div>
						</li>
						<li>
							<div class="stat_text">
								<i class="fa fa-check-square fa-2x"></i> 	 
								<a href="update-item.php"> <strong></strong>
								<small>Update item</small></a>
							</div>
						</li>
						

						<li>
							<div class="stat_text">
								<i class=" fa fa-trash-o fa-2x"></i> 	 
								<a href="delete-item.php"><strong></strong>
								<small>Delete item</small><a/>
							</div>
						</li>

						
					</ul>
				</div>
				

				
			</div>
			<!-- /.inner -->
		</div>
		<!-- /.outer -->
	</div>
	<!--Main Body Content Section End-->
            
            
<?php include 'inc/footer.php';?>        