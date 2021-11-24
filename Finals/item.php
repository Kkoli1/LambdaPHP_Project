<?php
    if (isset($_GET['add_to_cart'])) {
        // place codes here
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- External Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Personal CSS -->
        <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
        <link rel="stylesheet" href="css/navigation-general.css">
        <link rel="stylesheet" href="css/style5.css">
        <title>Item</title>
    </head>
    <body>
        <!-- Start of Header -->
        <header class="main-screen-header">
            <a href="mainscreen.php" class="logo-link">
                <div class="logo-container">
                    <img src="DesignMaterials/Icons/undraw_cabin_hkfr.png" alt="Mall Logo Image" style="grid-column: 1/span 1; grid-row: 1/span 2;">
                    <h1 class="abc-mall">ABC Mall</h1>
                </div>
            </a>
            <form action="" method="post">
                <div class="search-container">
                    <input type="text" name="search-nav" id="search-nav" placeholder="SEARCH">
                    <button type="submit" id="search-nav-submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <a href="" id="profile-icon-nav">
                <div class="profile-container">
                    <a href=""><img class="shop-cart" src="DesignMaterials/Icons/shopping_cart_white_24dp.svg" alt="shopping cart icon"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                </div>  
            </a>
        </header>
        <!-- End of Header -->

        <!-- Start of Item Container -->
        <div class="item-container">
            <div class="ic-left">
                <!-- Start of Slides -->
                <div class="slides">
                    <img src="DesignMaterials/Images/sample1.jpeg" alt="item">
                </div>
                <div class="slides">
                    <img src="DesignMaterials/Images/sample2.jpeg" alt="item">
                </div>
                <div class="slides">
                    <img src="DesignMaterials/Images/sample3.jpeg" alt="item">
                </div>
                <div class="slides">
                    <img src="DesignMaterials/Images/sample4.jpeg" alt="item">
                </div>
                <div class="slides">
                    <img src="DesignMaterials/Images/sample5.jpeg" alt="item">
                </div>
                <div class="slides">
                    <img src="DesignMaterials/Images/sample6.jpeg" alt="item">
                </div>
                <!-- End of Slides -->

                <!-- Previous and Next (Links) -->
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <!-- Caption Per Image -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <!-- Start of Row -->
                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="DesignMaterials/Images/sample1.jpeg" onclick="currentSlide(1)" alt="View 1">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="DesignMaterials/Images/sample2.jpeg" onclick="currentSlide(2)" alt="View 2">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="DesignMaterials/Images/sample3.jpeg" onclick="currentSlide(3)" alt="View 3">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="DesignMaterials/Images/sample4.jpeg" onclick="currentSlide(4)" alt="View 4">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="DesignMaterials/Images/sample5.jpeg" onclick="currentSlide(5)" alt="View 5">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="DesignMaterials/Images/sample6.jpeg" onclick="currentSlide(6)" alt="View 6">
                    </div>
                </div>
                <!-- End of Row -->
            </div>
            <div class="ic-right">
                <h2>Akio Item 1: Limited Edition</h2>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis nisl ac orci ornare, quis rutrum ipsum pulvinar. Donec vestibulum condimentum erat in finibus. 
                </p>
                <h3>Php 7.69</h3>
                <!-- Start of Comments -->
                <div class="comments">
                    <!-- Start of Comment Slides -->
                    <div class="comment-slides">
                        <i class="uil uil-star"></i>
                        <i class="uil uil-star"></i><br>
                        <q>Looks good only on picture...</q>
                        <p class="author">Boss Kevin</p>
                    </div>
                    <div class="comment-slides">
                        <i class="uil uil-star"></i>
                        <i class="uil uil-star"></i>
                        <i class="uil uil-star"></i><br>
                        <q>Ang pogi ko talaga</q>
                        <p class="author">All-around Akio</p>
                    </div>
                    <div class="comment-slides">
                        <i class="uil uil-star"></i>
                        <i class="uil uil-star"></i>
                        <i class="uil uil-star"></i>
                        <i class="uil uil-star"></i><br>
                        <q>I love Python!</q>
                        <p class="author">DavePogs</p>
                    </div>
                    <!-- End of Comment Slides -->

                    <!-- Previous and Next (Links) -->
                    <a class="prev2" onclick="plusSlides2(-1)">❮</a>
                    <a class="next2" onclick="plusSlides2(1)">❯</a>
                </div>
                <!-- End of Comments -->
                
                <!-- Add to Cart Button -->
                <form action="echo">
                    <input type="submit" name="add_to_cart" class="btn-add-to-cart" value="add to cart">
                </form>
            </div>
        </div>
        <!-- End of Item Container -->

        <!-- JavaScript Codes (needed for slideshow gallery) -->
        <script>
            // variable declarations
            var slideIndex = 1;
            var slideIndex2 = 1;

            showSlides(slideIndex);
            showSlides2(slideIndex2);

            // increase/decrease slide number
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function plusSlides2(n) {
                showSlides2(slideIndex2 += n);
            }
            
            // set no. of current slide
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            // show specific slide
            function showSlides(n) {
                var slides = document.getElementsByClassName("slides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (var i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (var i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }

            function showSlides2(n) {
                var commentSlides = document.getElementsByClassName("comment-slides");
                if (n > commentSlides.length) {
                    slideIndex2 = 1;
                }
                if (n < 1) {
                    slideIndex2 = commentSlides.length;
                }
                for (var i = 0; i < commentSlides.length; i++) {
                    commentSlides[i].style.display = "none";
                }
                commentSlides[slideIndex2 - 1].style.display = "block";
            }
        </script>
    </body>
</html>