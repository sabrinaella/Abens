<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
	 <?php
		if (isset($_SESSION['customer_email'])) {
			$session_customer = $_SESSION['customer_email'];
			$get_cust = "SELECT * FROM customers WHERE customer_email='$session_customer'";
			$run_cust = mysqli_query($con, $get_cust);
			
			if ($run_cust && mysqli_num_rows($run_cust) > 0) {
				$row_customers = mysqli_fetch_array($run_cust);
				$customer_image = $row_customers['customer_image'];
				$customer_name = $row_customers['customer_name'];

				echo "<center>
						<img src='customer_images/$customer_image' class='img-responsive'>
						</center>
						<br>
						<h3 align='center' class='panel-title'>Name: $customer_name</h3>";
			} else {
				echo "<center><h3 align='center' class='panel-title'>Customer data not found.</h3></center>";
			}
		} else {
			echo "<center><h3 align='center' class='panel-title'>Please log in to view your profile.</h3></center>";
		}
	?>
    </div>
</div>


		

	</div>
	<div class="panel-bdy">
		<ul class="nav nav-pills nav-staked">
			<li class="abc">
				<a href="my_account.php?my_order"><i class="fa fa-list-al">  My Order</a>
			</li >
			
			<li>
				<a href="my_account.php?edit_act"><i class="fa fa-pencil-square"></i> Edit Account </a>
			</li>
			<li>
				<a href="my_account.php?change_pass"><i class="fa fa-key"></i> Change Password</a>
			</li>
			
			<li>
				<a href="my_account.php?delete_ac"><i class="fa fa-trash"></i> Delete Account</a>
			</li>
			<li>
				<a href="my_account.php?pay_offline"><i class="fa fa-user-plus"></i> Logout</a>
			</li>
		</ul>
		
	</div>
</div>
