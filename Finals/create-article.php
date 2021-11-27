<?php
    include("dbconnect.php");
          
    

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
    <title>Create Article</title>
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

    <section class="grid-page-2">
        <div class="left"><a href="admin-menu.php"><b>←</b></a></div>
        <div class="center">
            <form method = "POST" enctype="multipart/form-data"> 
                <div class="create-article-form-container">
                    <div class="article-picture-container">
                        <div class="article-picture-label">
                            <label for="article-picture">Choose Article Picture</label>
                        </div>
                        <div class="article-file-choose">
                            <input type="file" name="article_picture">
                        </div>
                    </div>
                    <div class="article-title-container">
                        <input type="text" name="article_title" id="article-title" placeholder="Enter Article Title">
                    </div>
                    <div class="article-content-container">
                        <textarea name="article_content" id="article-content" cols="30" rows="6" placeholder="Write here..."></textarea>
                    </div>
                </div>
                <div class="submit-article-container">
                    <input type="submit" value="Submit" id="article-submit" name="submit">
                </div>

            <?php
                if (isset($_POST['submit'])){
                    $title = $_POST['article_title'];
                    $dir = 'Articles/Photos';
                    $upload = move_uploaded_file($_FILES['article_picture']['tmp_name'], $dir. "/". $_FILES['article_picture']['name']);
                    $filename_photo = $_FILES['article_picture']['name'];
                    $filename_text = $title.'.txt';
                    $fileaccess = fopen('Articles/Texts/'.$filename_text,"w");
                    fwrite($fileaccess,$_POST['article_content']);
                    $fileaccess.fclose();

                    $insert = "INSERT INTO articles (title, body_filename, photo_filename) values ('$title', '$filename_text', '$filename_photo')";

                    if (!mysqli_query($conn, $insert)){
                        echo("Error description: " . mysqli_error($conn));
                        echo "<h3 style = 'color:red; text-align:center'>Wrong Input Values, review values</h3>";
                    } else {
                        header("Location: create-article.php");
                    }
                };
            ?>
            </form>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>