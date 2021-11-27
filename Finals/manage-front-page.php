<?php


include("dbconnect.php");



$query = "SELECT * from articles";
$result = mysqli_query($conn, $query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">
    <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style4.css">
    <title>Manage Front Page</title>
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

        <div class="login-as-text-container">
            <h2>Logged in as, <a href="admin-menu.php">Admin</a></h2>
        </div>
    </header>

    <section class="grid-page">
        <div class="left"><a href="admin-menu.php"><b>←</b> </a></div>
        <div class="center">
            <div class="manage-front-page-container">
                <h3>Select Articles</h3>
                <br>
                <form action="" method="POST">


                <?php 
                
                if (mysqli_num_rows($result) == 0){
                    echo "<h3 style = 'color:blue'> DB is EMPTY </h3>";
                } else {

                    while ($qValue = mysqli_fetch_assoc($result)){
                
                ?>
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article[]" id="Article-1" value=<?php echo $qValue['article_id'];?>>
                            <label for="Article-1"><?php echo $qValue['title'];?></label>
                        </div>
                    </div>
                    <br>
                <?php
                        }
                    }
                ?>

                    <input type="submit" name = "submit" value="Submit" class="form-article-submit">
                    <input type="submit" name = "delete" value="Delete" class="form-article-submit">

                <?php

                        if (isset($_POST['submit'])){

                            $aArticles = $_POST['Article'];

                            if (empty($aArticles)){
                                echo "<h3 style = 'color:red; text-align:center'>Article count is 0, please choose one</h3>";
                            }
                            elseif (count($aArticles) > 4){
                                echo "<h3 style = 'color:red; text-align:center'>Choose only 4 articles</h3>";
                            } else {
                                
                                $truncate = "TRUNCATE TABLE article_home;";
                                $query = mysqli_query($conn, $truncate);

                                for ($i=0; $i < count($aArticles); $i++){
                                    $article_id = $aArticles[$i];
                                    $insert = "INSERT INTO article_home values ($article_id);";
                                    $query = mysqli_query($conn, $insert);
                                }
                                echo "<h3>Articles Submitted!</h3>";
                            }
                        }
                        elseif (isset($_POST['delete'])){

                            $aArticles = $_POST['Article'];

                            if (empty($aArticles)){
                                echo "<h3 style = 'color:red; text-align:center'>Article count is 0, please choose one</h3>";
                            } else {
                        
                                for ($i=0; $i < count($aArticles); $i++){
                                    $article_id = $aArticles[$i];
                                    $query = "DELETE FROM article_home WHERE article_id = $article_id";
                                    mysqli_query($conn, $query);
                                    $query = "DELETE FROM articles WHERE article_id = $article_id";
                                    mysqli_query($conn, $query);
                                }
                                echo "<h3>Articles Deleted!</h3>";
                            }


                        }

                ?>

                </form>
            </div>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>