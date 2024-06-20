<header>
<div class="header-1">
   <a href="index.php" class="logo" > <img src="../website/all/logo2.png" alt="Logo image" class="hidden-xs">  </a>                      
   <div class="col-md-6 offer">
      <a href="#" class="btn btn-sucess btn-sm">
         <?php
         if (!isset($_SESSION['customer_email'])){
            echo "Welcome Guest";
         }else{
            echo "Welcome: " .$_SESSION['customer_email'] . "";
         }
         ?>
      </a>
      <a id="pr" href="#"> Shopping Cart Total Price: Rp<?php totalPrice(); ?>, Total Items <?php item(); ?></a>
   </div>
</div>

<div class="header-2">
<nav class="navbar">
   <ul >
      <li>
         <li><a href="../index.php">HOME</a></li>
         <li><a href="../index.php#arrival">SALON</a></li>
         <li><a href="../index.php#parlor">MAKEUP</a></li>
         <li><a href="../trimer.php">SHOP</a></li>
         <li><a href="#footer">ABOUT</a></li>
         <div class="col-md-6">
            <ul class="menu">
               <li>
                  <div class="collapse clearfix" id="search">
                     <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                           <input type="text" name="user_query" placeholder="search" class="form-control" required="">
                           <button type="submit" value="search" name="search" class="btn btn-primary">
                              <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </form>
                  </div>
               </li>
               <li>
                  <a href="../cart.php" class="">
                     <i class="fa fa-shopping-cart"></i>
                     <span><?php item(); ?> items in cart</span>
                  </a>
               </li>
               <li>
                  <a  href="../customer_registration.php"><i class="fa fa-user-plus"></i> Register</a>
               </li>
               <li>
                  <?php
                  if (!isset($_SESSION['customer_email'])){
                  echo "<a href='../checkout.php'>My Account</a>";
                     } else{
                  echo "<a href='../customer/my_account.php?my_order'>My Account</a>";
                     }
                  ?>
               </li>
               <li>
                  <?php
                  if (!isset($_SESSION['customer_email'])){
                  echo "<a href='../checkout.php'>Login</a>";
                     } else{
                  echo "<a href='../logout.php'>Logout</a>";
                     }
                  ?>
               </li>
            </ul>
         </div>
      </li>
   </ul>
</nav>