<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<?php
if(isset($_GET['pro_id'])){
  $pro_id=$_GET['pro_id'];
  $get_product="select * from products where product_id='$pro_id'";
  $run_product=mysqli_query($con,$get_product);
  $row_product=mysqli_fetch_array($run_product);
  $p_cat_id=$row_product['p_cat_id'];
  $p_title=$row_product['product_title'];
  $p_price=$row_product['product_price'];
  $p_desc=$row_product['product_desc'];
  $p_img1=$row_product['product_img1'];
  $p_img2=$row_product['product_img2'];
  $p_img3=$row_product['product_img3'];
  $get_p_cat="select * from product_category where p_cat_id='$p_cat_id'";
  $run_p_cat=mysqli_query($con,$get_p_cat);
  $row_p_cat=mysqli_fetch_array($run_p_cat);
  $p_cat_id=$row_p_cat['p_cat_id'];
  $p_cat_title=$row_p_cat['p_cat_title'];
}
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
            <li><span>Product Details</span></li>
          </ul>
        </div>
      </div>
    </section>
  
  <!-- img slidebar -->
  <div class="content1" id="content1">
    <div class="container1">
      <div class="col-md-3">
        <?php
          include("includes/sidebar.php");  
        ?>
      </div>
    </div>
  </div>

  <div class="slides">
    <div class="mySlides fade">
      <div class="numbertt"></div>
      <img src="admin_area/product_images/<?php echo $p_img1 ?>" width="500" height="500">
    </div>
    <div class="mySlides fade">
      <div class="numbertt"></div>
      <img src="admin_area/product_images/<?php echo $p_img2 ?>" width="500" height="500">
    </div>
    <div class="mySlides fade">
      <div class="numbertt"></div>
      <img src="admin_area/product_images/<?php echo $p_img3 ?>" width="500" height="500">
    </div>
      <a class="prv" onclick="plusSlides(-1)">&#10094;</a>
      <a class="net" onclick="plusSlides(1)">&#10095;</a>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- owl carousel js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

    <div class="co-md-6">
      <div class="bx">
        <h1 class="text-center"><?php echo $p_title ?></h1>
      <?php addCart(); ?>
      
        <form action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="col-md-5 control-label" >Product Quantity</label>
            <div class="col-md-7">
              <select name="product_qty" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
      
        <div class="form-group">
          <label class="col-md-5 control-label" >Chose Color</label>
          <div class="col-md-7">
            <select name="product_size" class="form-control">
              <option>RED & Blue</option>
              <option>khaki</option>
                <option>white</option>
                <option>gray</option>
                  <option>blue</option>
            </select>
          </div>
        </div>
        <p class="price">Rp</i><?php echo $p_price; ?></p>
        <p class="text-center buttons">
          <button class="btn-prim" type="submit"><i class=" fa fa-shopping-cart">Add to cart</i></button>
        </p>
      </form>
      </div>
      <div class="col-xs-4">
        <a href="#" class="thumb">
          <img src="" class="img-responsive" >
        </a>
      </div>
      <div class="col-xs-4">
        <a href="#" class="thumb">
          <img src="" class="img-responsive" >
        </a>
      </div>
      <div class="col-xs-4">
        <a href="#" class="thumb">
          <img src="" class="img-responsive" >
        </a>
      </div>
    </div>
  </div>

  
  
  </body>
</html>