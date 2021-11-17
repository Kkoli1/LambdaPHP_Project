<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Main Screen</title>
    
</head>
<body>
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
                <a href=""><img src="DesignMaterials/Icons/shopping_cart_white_24dp.png" alt="shopping cart icon"></a>
                <a href=""><img src="DesignMaterials/Icons/account_circle_white_24dp.png" alt="account icon"></a>
                <button><a href="customer-login.php"><b>LOGIN</b></a></button>
            </div>
            <div class="yellow-button" id="explore-button">
                <button><b>EXPLORE</b></button>
            </div>
            <div class="yellow-button" id="shop-button">
                <button><b>SHOP</b></button>
            </div>
            <div class="search-button">
                <input type="text" placeholder="SEARCH">
                <img src="DesignMaterials/Icons/search_white_24dp.png" alt="">
            </div>
        </div>
    </header>

    <section class="main-page">
        <div class="articles-and-nav">
            <div class="main-article" style="grid-column: 1/span 3; grid-row: 1/span 3;">
                <a href="articles.php" class="main-article-img" ><div ></div></a>
                <div class="main-article-label">    
                    <div class="text">
                        <h1><b>Limited Food Restaurant Promos!</b></h1>
                        <h5>Receive multiple restaurant promos by following the instructions here.</h5>
                    </div>                                                    
                </div>
            </div>
            <div class="main-nav-button" id="main-shop-button">
                <a href="">
                    <div id="out">
                        <div id="in"><b>SHOPS</b></div>
                    </div>
                </a>
            </div>
            <div class="main-nav-button" id="main-restaurant-button">
                <a href="">
                    <div id="out">
                        <div id="in"><b>RESTAURANTS</b></div>
                    </div>
                </a>
            </div>
            <div class="main-nav-button" id="main-cinema-button" >
                <a href="">
                    <div id="out">
                        <div id="in"><b>CINEMA</b></div>
                    </div>
                </a>
            </div>
            <div class="sub-article" >
                <a href="" id="sub-article-img1"><div class="sub-article-img" ></div></a>
                <div class="sub-article-label">
                    <div class="text1">
                        <h4>Travel Destinations</h4>
                    </div> 
                </div>
            </div>
            <div class="sub-article" >
                <a href="" id="sub-article-img2"><div class="sub-article-img"  ></div></a>
                <div class="sub-article-label">
                    <div class="text2">
                        <h4>Gourmet Foods To Try</h4>
                    </div> 
                </div>
            </div>
            
            <div class="sub-article">
                <a href="" id="sub-article-img3" ><div class="sub-article-img" ></div></a>
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

</body>
</html>