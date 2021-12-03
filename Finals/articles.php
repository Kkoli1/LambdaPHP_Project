<?php 
session_start();
if (isset($_SESSION['business_id'])){
    header("Location: assoc-menu.php");
}
if (isset($_SESSION['admin'])){
    header("Location: admin-menu.php");
}

include("dbconnect.php");
$article = '';
?>
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
    <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Articles</title>
</head>
<body>
    <header class="main-screen-header">
        <a href="mainscreen.php" class="logo-link">
        <div class="logo-container">
            <img src="DesignMaterials/Icons/undraw_cabin_hkfr.png" alt="Mall Logo Image" style="grid-column: 1/span 1; grid-row: 1/span 2;">
            <h1 class="abc-mall">ABC Mall</h1>
            <h3 class="mall-slogan">Mall Slogan</h3>
        </div>
        </a>
        
        <a href="" class="profile-link">
            <?php if (!isset($_SESSION['user'])){?>
                <img src="DesignMaterials/Icons/account_circle_white_24dp.png" alt="">
            <?php } else { ?>
                <img src="DesignMaterials/Icons/account_circle_green_24dp.png" alt="">
            <?php } ?>
        </a>
    </header>


    <?php 
    
    if(isset($_GET['article'])){
        
        $article_id = $_GET['article'];
        $result = mysqli_query($conn, "SELECT * FROM articles WHERE article_id = $article_id");
        $articleInf = mysqli_fetch_array($result);
        $filephoto = "background-image: '../Articles/Photos/".$articleInf['photo_filename']."'";
        $filetext = "Articles/Texts/".$articleInf['body_filename'];

    ?>
    <section class="article-page">
        <div class="left"><a href="mainscreen.php"><b>< Back</b> </a></div>
        <div class="center">
            <div class="article-img" style = <?php echo $filephoto;?>></div>
            <h2><?php echo $articleInf['title'] ?></h2>
            <h5 class="article-date-posted">November 3, 2021</h5>
            <h5 class="article-time-read">5 min read</h5>
            <br>
            <br>
            <p> <?php 
                $file = fopen($filetext, "r") or die("Unable to open file!");
                echo fread($file, filesize($filetext));
                fclose ($file);
             ?> </p>
        </div>
        <div class="right"></div>
    </section>
    <?php 
    
    } else {
        header("Location: mainscreen.php");
    }
    ?>

</body>
</html>