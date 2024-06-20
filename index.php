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
        <title>Abenss</title>
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

        <!-- home section starts  -->
        <section class="home" id="home">
            <h1 class="heading"> <span>BEST OFFERS FOR YOU</span></h1>
            <div class="slideshow-container">
                <!-- dynamic hairstyle images section starts  -->
                <?php
                $get_slider="select * from slider LIMIT 0,1";
                $run_slider= mysqli_query($con,$get_slider);
                while ($row= mysqli_fetch_array($run_slider)) {
                    $slider_name= $row['slider_name'];
                    $slider_image= $row['slider_image'];
                    $slider_url= $row['slider_url'];
                    echo 
                    "<div class='mySlides fade'>
                    <a href='$slider_url'><img src='admin_area/slider_images/$slider_image'  width='1400' height='400'></a>
                    </div>";
                }
                ?>
                <?php
                $get_slider="select * from slider LIMIT 1,10";
                $run_slider= mysqli_query($con,$get_slider);
                while ($row= mysqli_fetch_array($run_slider)) {
                $slider_name= $row['slider_name'];
                    $slider_image= $row['slider_image'];
                    $slider_url= $row['slider_url'];
                    echo
                    "<div class='mySlides fade '>
                    <a href='$slider_url'><img src='admin_area/slider_images/$slider_image' width='1400' height='400'></a>
                    </div>";
                }
                ?>
                <!-- dynamic hairstyle images section End  -->
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div  style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
            </div>
        </section>
        <!-- home section ends -->

        <!-- new this week section start -->
        <!-- hot start -->
        <div class="hot">    
            <div class="box">
                <div class="container">
                    <div class="col-md-121">
                        <h2>Latest this Week</h2>
                        <!-- dynamic latest this week images section start  -->
                        <div class=" col-sm-4" >
                            <div class="row">
                                <?php
                                getPro();
                                ?>
                            </div>
                        </div>
                        <!-- hot End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- dynamic latest this week images section End  -->
        
        <!-- new this week section End -->

        <!--saloon product section starts  -->
        <!-- Trimer Start  -->
        <section class="arrival" id="arrival">
            <h1 class="heading"> <span>SALON PRODUCTS</span> </h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=22"> <img src="website/all/th (2).jpg"  alt="" width="150"></a>
                    </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=22"><h3>Trimer</h3></a>
                        </div>
                        <div class="overlay">

                        </div>
                    </div>
                    <!-- Trimer End  -->

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=23">  <img src="website/all/drayer.svg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=23">  <h3>Dryer</h3></a>
                        </div>
                        <div class="overlay">

                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=24"> <img src="website/all/str.svg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=24"> <h3>Straightener</h3></a>
                        </div>
                        <div class="overlay">

                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=25"><img src="website/all/mass.svg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=25"><h3>Massager</h3></a>
                        </div>
                        <div class="overlay">

                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=26"> <img src="website/all/cre.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=26"><h3>Shaving Cream</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=27"> <img src="website/all/blad.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=27"><h3>Blade</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=28"> <img src="website/all/napkin.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=28"><h3>Napkin</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=29"> <img src="website/all/lotion.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=29"><h3>Lotion</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=30"> <img src="website/all/color.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=30"><h3>Color</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=31"> <img src="website/all/scissor.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=31"><h3>Scissor</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=32"> <img src="website/all/ustra.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=32"><h3>classic shaver</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=33"> <img src="website/all/comb.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=33"><h3>Comb</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=34"> <img src="website/all/towel.svg"  alt=""></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=34"><h3>Towel</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=35"> <img src="website/all/foam.jpg"  alt="" width="200"></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=35"><h3>Shaving Foam</h3></a>
                        </div>
                        <div class="overlay">

                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=36"> <img src="website/all/kit.jpg"  alt=""width="200"></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=36"><h3>Facial Kit</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <a href="trimer.php?p_cat=37"> <img src="website/all/powder.jpg"  alt="" width="200"></a>
                        </div>
                        <div class="info">
                            <a href="trimer.php?p_cat=37"><h3>Powder</h3></a>
                        </div>
                        <div class="overlay">
                        
                        </div>
                    </div>
                </div>
        </section>
        <!-- saloon products section ends -->

        <!-- parlor products section starts -->
        <section class="parlor" id="parlor">
            <h1 class="heading"> <span>MAKEUP</span> </h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=38"> <img src="website/all/lip.jpg"  alt="" width="300"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=38"><h3>Lip Care</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>
                
                <!-- Trimer End  -->
        
                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=39">  <img src="website/all/ey.jpg" alt="" width="250"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=39">  <h3>Eye Liner</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=40"> <img src="website/all/cr.jpg" alt="" width="300"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=40"> <h3>Face Cream </h3></a>
                    </div>
                    <div class="overlay">

                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=41"><img src="website/all/nail.jpg" alt=""width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=41"><h3>Nailpolish</h3></a>
                    
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=42"> <img src="website/all/beauty.jpg"  alt=""width="250"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=42"><h3>Beauty Care</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=43"> <img src="website/all/lacme.jpg"  alt=""width="330"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=43"><h3>Lacme</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                    <a href="trimer.php?p_cat=44"> <img src="website/all/skin.jpg"  alt=""width="330"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=44"><h3>Skin Care</h3></a>
                        
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- parlor products section ends -->
        <!-- Trimer End  -->
        <section class="use" id="use">
            <h1 class="heading"> <span>DAILY-USE</span> </h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=49"> <img src="website/all/detergent.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=49"><h3>Detergent</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>
                <!-- Trimer End  -->
        
                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=50">  <img src="website/all/deo.jpg" alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=50">  <h3>Deodorant</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=51"> <img src="website/all/face.jpg" alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=51"> <h3>Facewash</h3></a>
                    </div>
                    <div class="overlay">

                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=52"><img src="website/all/hair.jpg" alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=52"><h3>Hair Gel</h3></a>
                    
                    </div>
                    <div class="overlay">
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=53"> <img src="website/all/harp.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=53"><h3>Harpic</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=54"> <img src="website/all/per.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=54"><h3>Perfume</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=55"> <img src="website/all/wolet.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=55"><h3>Wallet</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=56"> <img src="website/all/belt.jpg"  alt="" width="300"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=56"><h3>Belt</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=57"> <img src="website/all/soap.jpg"  alt="" width="250"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=57"><h3>Soap</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=58"> <img src="website/all/toth.jpg"  alt="" width="250"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=58"><h3>Toothpaste</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=59"> <img src="website/all/hand.jpg"  alt="" width="200"> </a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=59"><h3>Handwash</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=60"> <img src="website/all/shampoo.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=60"><h3>Shampoo</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=61"> <img src="website/all/oil.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=61"><h3>Hair Oil</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=62"> <img src="website/all/room.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=62"><h3>Room Fragrance</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <a href="trimer.php?p_cat=63"> <img src="website/all/hai.jpg"  alt="" width="200"></a>
                    </div>
                    <div class="info">
                        <a href="trimer.php?p_cat=63"><h3>Hair Spray</h3></a>
                    </div>
                    <div class="overlay">
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery section ends -->

        <!-- footer -->
        <?php include 'includes/footer.php'; ?>

        <!-- jquery cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- owl carousel js file cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- custom js file link  -->
        <script src="main/js.js"></script>
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
        
    </body>
</html>

