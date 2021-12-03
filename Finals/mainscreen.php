<?php
    session_start();
    
    if (isset($_GET['search_submit'])) {
        // place codes here
    }

    if (isset($_SESSION['admin'])){
        header("Location: admin-menu.php");
    }
    if (isset($_SESSION['business_id'])){
        header("Location: assoc-menu.php");
    }

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        session_destroy();
    }
    include("dbconnect.php");

    $articlesR = mysqli_query($conn, "SELECT * FROM article_home");
    $i = 0;
    while ($articleInf = mysqli_fetch_assoc($articlesR)){
        $articles[$i] = $articleInf['article_id'];
        $i++;
    }


    $dir = "background-image: url('Articles/Photos/";


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
                <?php 
                
                    if(isset($_SESSION['user'])){
                        echo '<img src="DesignMaterials/Icons/account_circle_green_24dp.png" alt="account icon"></a>';
                        echo '<a href="mainscreen.php?logout=1" class="icons-login">LOGOUT</a>';
                    } else {
                        echo '<img src="DesignMaterials/Icons/account_circle_white_24dp.svg" alt="account icon"></a>';
                        echo '<a href="customer-login.php" class="icons-login">LOGIN</a>';
                    }
                
                ?>
                
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


            <?php 
            $result = mysqli_query($conn, "SELECT * FROM articles WHERE article_id = $articles[0]");
            $articleInfor = mysqli_fetch_array($result);
            $filename = $dir.$articleInfor['photo_filename']."')";
            $title = $articleInfor['title'];
            $link = "articles.php?article=".$articles[0];
            ?>
                <a href=<?php echo $link ?> class="main-article-img" style = <?php echo $filename?>><div></div></a>
                <div class="main-article-label">
                    <div class="text">
                        <h1><?php echo $title ?></h1>
                    </div>                                                    
                </div>
        

            </div>
            <div class="main-nav-button" id="main-shop-button">
                <a href="explore_other.php">
                    <div id="out">
                        <div id="in">SHOPS</div>
                    </div>
                </a>
            </div>
            <div class="main-nav-button" id="main-restaurant-button">
                <a href="explore_food.php">
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

            <?php 
            $result = mysqli_query($conn, "SELECT * FROM articles WHERE article_id = $articles[1]");
            $articleInfor = mysqli_fetch_array($result);
            $filename = $dir.$articleInfor['photo_filename']."')";
            $title = $articleInfor['title'];
            $link = "articles.php?article=".$articles[1];
            ?>

                <a href=<?php echo $link ?> id="sub-article-img1"><div class="sub-article-img" style = <?php echo $filename?> ></div></a>
                <div class="sub-article-label">
                    <div class="text1">
                        <h4><?php echo $title?></h4>
                    </div> 
                </div>

            </div>
            <div class="sub-article" >

            <?php 
            $result = mysqli_query($conn, "SELECT * FROM articles WHERE article_id = $articles[2]");
            $articleInfor = mysqli_fetch_array($result);
            $filename = $dir.$articleInfor['photo_filename']."')";
            $title = $articleInfor['title'];
            $link = "articles.php?article=".$articles[2];
            ?>


                <a href=<?php echo $link ?>  id="sub-article-img2"><div class="sub-article-img" style = <?php echo "background-image: url('../Articles/Photos/".$articleInfor['photo_filename']."')" ?>></div></a>
                <div class="sub-article-label">
                    <div class="text2">
                        <h4><?php echo $title?></h4>
                    </div> 
                </div>

            </div>
            
            <div class="sub-article">


            <?php 
            $result = mysqli_query($conn, "SELECT * FROM articles WHERE article_id = $articles[3]");
            $articleInfor = mysqli_fetch_array($result);
            $filename = $dir.$articleInfor['photo_filename']."')";
            $title = $articleInfor['title'];
            $link = "articles.php?article=".$articles[3];
            ?>

                <a href=<?php echo $link ?>  id="sub-article-img3"><div class="sub-article-img" style = <?php echo $filename?>></div></a>
                <div class="sub-article-label">
                    <div class="text3">
                        <h4><?php echo $title?></h4>
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