<?php
session_start();
if (isset($_SESSION['admin'])){
    header("Location: admin-menu.php");
}
if (isset($_SESSION['business_id'])){
    header("Location: assoc-menu.php");
}
include ("dbconnect.php");

$movie_id = 0;
if (isset($_GET['movie_id'])){

    $movie_id = $_GET['movie_id'];
    $query = "SELECT * FROM cinema WHERE movie_id = $movie_id;";
    $result = mysqli_query($conn, $query);
    $movieInfo = mysqli_fetch_array($result);
    $movie_name = $movieInfo['movie_name'];
    $movie_desc = $movieInfo['movie_description'];
    $start_time = $movieInfo['start_time'];
    $duration = $movieInfo['duration_hours']."hrs ".$movieInfo['duration_mins']."mins";
    $cinema_no = $movieInfo['cinema_no'];

    $movie_trailer = $movieInfo['file_trailer'];
    $file_poster = "Cinema/Posters/".$movieInfo['file_picture'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Personal CSS -->
        <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
        <link rel="stylesheet" href="css/navigation-general.css">
        <link rel="stylesheet" href="css/style5.css">
        <title><?php echo $movie_name;?></title>
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

        <h1 id="movie-name"><?php echo $movie_name;?></h1>
        <!-- Start of Per Movie Container -->
        <div class="per-movie-container">
            <div class="pmc-left">
                <h3>Video Trailer</h3>
                <div>
                
                    <iframe width="650" height="484" src=<?php echo $movie_trailer?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="pmc-right">
                <h3>Poster & Details</h3>
                <div class="pmc-right-inner">
                    <div class="top">
                        <img src=<?php echo $file_poster;?> alt="DesignMaterials/Icons/image_black_24dp.svg">
                    </div>
                    <div class="bottom">
                        <h4>Start Time: <span><?php echo $start_time;?></span></h4>
                        <h4>Duration: <span><?php echo $duration;?></span></h4>
                        <h4>Cinema #: <span><?php echo $cinema_no;?></span></h4>
                        <h4>Description: 
                            <span><?php echo $movie_desc;?></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    <?php } else {
        
        header("Location: cinema.php");

        }
    ?>
        <!-- End of Per Movie Container -->
    </body>
</html>