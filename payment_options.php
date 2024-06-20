<div class="box">
	<?php
	$session_email=$_SESSION['customer_email'];
	$select_customer="select * from customers where customer_email='$session_email'";
	$run_cust=mysqli_query($con, $select_customer);
	$row_customer=mysqli_fetch_array($run_cust);
	$customer_id=$row_customer['customer_id'];



	  ?>
		<h1 class="text-center">Payment Options</h1>

			<p class="lead payment-options">
				<a href="order.php?c_id=<?php echo $customer_id ?>"><img src="customer/customer_images/pay_bni.png" class="img-responsive"></a>
				<a href="order.php?c_id=<?php echo $customer_id ?>"><img src="customer/customer_images/pay_bca.png" width="150" height="163" class="img-responsive"></a>
				<a href="order.php?c_id=<?php echo $customer_id ?>"><img src="customer/customer_images/pay_mandiri.png" width="150" height="163" class="img-responsive"></a><br>
				<a href="order.php?c_id=<?php echo $customer_id ?>"><img src="customer/customer_images/pay_sea.png" width="150" height="163" class="img-responsive"></a>
				<a href="order.php?c_id=<?php echo $customer_id ?>"><img src="customer/customer_images/pay_bri.png" width="150" height="163" class="img-responsive"></a>
				<a href="order.php?c_id=<?php echo $customer_id ?>"><img src="customer/customer_images/pay_dana.png" width="150" height="163" class="img-responsive"></a><br>
			</p>	
</div>