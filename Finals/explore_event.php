<?php 
session_start();
include("dbconnect.php");

if (isset($_SESSION['admin'])){
    header("Location: admin-menu.php");
}
if (isset($_SESSION['business_id'])){
    header("Location: assoc-menu.php");
}
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style4.css">
    <title>Events</title>
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

        <form action="" method="post">
            <div class="search-container">
                <input type="text" name="search-nav" id="search-nav" placeholder="SEARCH">
                <button type="submit" id="search-nav-submit"><i class="fa fa-search"></i></button>
            </div>
        </form>

        <a href="" id="profile-icon-nav">
            <div class="profile-container">
                <?php if (isset($_SESSION['user'])){?>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#0b960a"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                <?php } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                <?php } ?>
            </div>  
        </a>
    </header>

    <section class="grid-page-2">
        <div class="left"></div>
        <div class="center">
            <div class="explore-list-header">
                <h1>EVENT<span>(Latest/Upcoming)</span></h1>
            </div>


        <?php

            $query = "SELECT * FROM events;";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){
                while($qValue = mysqli_fetch_assoc($result)){

        ?>
        
            <div class="tile-event-container">
                <div class="tile-event">
                    <div class="col1-event">
                        <h3><?php echo $qValue['event_title'];?></h3>
                        <h3 class="myh3">Start: <b><?php echo $qValue['start_date'];?></b></h3>
                        <h3 class="myh3">End: <b><?php echo $qValue['end_date'];?></b></h3>
                    </div>
                    <div class="col2-event">
                        <h5><?php echo $qValue['event_description'];?></h5>
                    </div>
                </div>
            </div>

            <?php

                }
            }

            ?>
            
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>