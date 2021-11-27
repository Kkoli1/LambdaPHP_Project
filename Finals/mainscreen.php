<?php
    if (isset($_GET['search_submit'])) {
        // place codes here
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font (Open Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Personal CSS -->
    <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <!-- Start of Main Screen Header -->
    <header class="main-screen-header">
        <a href="mainscreen.php" class="logo-link">
        <div class="logo-container">
            <img src="DesignMaterials/Icons/undraw_cabin_hkfr.png" alt="Mall Logo Image" style="grid-column: 1/span 1; grid-row: 1/span 2;">
            <h1 class="abc-mall"><b>ABC Mall</b></h1>
            <h3 class="mall-slogan">Mall Slogan</h3>
        </div>
        </a>
        
        <div class="nav-container">
            <div></div>
            <div></div>
            <div class="icons">
                <a href="cart.php"><img src="DesignMaterials/Icons/shopping_cart_white_24dp.svg" alt="shopping cart icon"></a>
                <a href="customer-register.php"><img src="DesignMaterials/Icons/account_circle_white_24dp.svg" alt="account icon"></a>
                <a href="customer-login.php" class="icons-login">LOGIN</a>
            </div>
            <div class="yellow-button" id="explore-button">
                <a href="explore-list.php">EXPLORE</a>
            </div>
            <div class="yellow-button" id="shop-button">
                <a href="shop.php">SHOP</a>
            </div>
            <!-- Start of Search Form -->
            <div class="search-button">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                    <input type="text" name="search_details" placeholder="SEARCH">
                    <button type="submit" name="search_submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- End of Search Form -->
        </div>
    </header>
    <!-- End of Main Screen Header -->

    <!-- Start of Main Page -->
    <section class="main-page">
        <div class="articles-and-nav">
            <div class="main-article" style="grid-column: 1/span 3; grid-row: 1/span 3;">
                <a href="articles.php" class="main-article-img"><div></div></a>
                <div class="main-article-label">
                    <div class="text">
                        <h1>Limited Food Restaurant Promos!</h1>
                        <h5>Receive multiple restaurant promos by following the instructions here.</h5>
                    </div>                                                    
                </div>
            </div>
            <div class="main-nav-button" id="main-shop-button">
                <a href="shop.php">
                    <div id="out">
                        <div id="in">SHOPS</div>
                    </div>
                </a>
            </div>
            <div class="main-nav-button" id="main-restaurant-button">
                <a href="food.php">
                    <div id="out">
                        <div id="in">RESTAURANTS</div>
                    </div>
                </a>
            </div>
            <div class="main-nav-button" id="main-cinema-button" >
                <a href="cinema.php">
                    <div id="out">
                        <div id="in">CINEMA</div>
                    </div>
                </a>
            </div>
            <div class="sub-article" >
                <a href="#" id="sub-article-img1"><div class="sub-article-img" ></div></a>
                <div class="sub-article-label">
                    <div class="text1">
                        <h4>Travel Destinations</h4>
                    </div> 
                </div>
            </div>
            <div class="sub-article" >
                <a href="#" id="sub-article-img2"><div class="sub-article-img"></div></a>
                <div class="sub-article-label">
                    <div class="text2">
                        <h4>Gourmet Foods To Try</h4>
                    </div> 
                </div>
            </div>
            
            <div class="sub-article">
                <a href="#" id="sub-article-img3"><div class="sub-article-img"></div></a>
                <div class="sub-article-label">
                    <div class="text3">
                        <h4>Vintage Clothes 2021</h4>
                    </div> 
                </div>
            </div>
            <div class="admin-assoc-login">
                <a href="admin-assoc-login.php" class="admin-assoc-login-button">
                    <div >
                        <button name="admin-associate-login">Admin/Associate Login</button>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End of Main Page -->
</body>
</html>