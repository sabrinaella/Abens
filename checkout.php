<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <!-- header -->
  <?php include 'includes/header.php'; ?>

  <section class="content" id="content">
    <div class="container">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><span>Checkout</span></li>
        </ul>
      </div>
    </div>
  </section>  
  
  <div class="content1" id="content1">
    <div class="container1">
      <div class="col-md-3">
        <?php
        include("includes/sidebar.php");  
        ?>
      </div>
    </div>
  </div>
  
  <div class="col-md-9">
    <?php
    if (!isset($_SESSION['customer_email'])) {
      include ('customer/customer_login.php');
    }else{
      include ('payment_options.php');
    }
    ?>
  </div>
  
  <!-- footer -->
  <?php
    include("includes/footer.php");
  ?>
  
</body>
</html>