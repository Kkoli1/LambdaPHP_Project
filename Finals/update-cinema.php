<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style4.css">
    <title>Update Cinema</title>
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
            <form action="#">
                <div class="update-cinema-form-container">
                    <div class="row1">
                        <input type="text" name="movie-title" placeholder="Enter Movie Name">
                    </div>
                    <div class="row2">
                        <div class="time-start">
                            <label for="time-start-input">Start: </label>
                            <input type="time" name="time-start-input" id="time-start-input">
                        </div>
                        <div class="time-duration">
                            <label for="">Duration: </label>
                            <input type="text" name="time-duration-hrs" id="time-duration-hrs">
                            <label for="time-duration-hrs">hrs</label>
                            <input type="text" name="time-duration-mins" id="time-duration-mins">
                            <label for="time-duration-mins">mins</label>
                        </div>
                        <div class="cinema-num">
                            <input type="text" name="cinema-num" id="cinema-num" placeholder="Enter Cinema No.">
                        </div>
                    </div>
                    <div class="movie-info">
                            <textarea name="movie-info" id="additional-info" cols="30" rows="10" placeholder="Enter Additional information"></textarea>
                    </div>
                    <div class="movie-submit">
                        <input type="submit" value="+">
                    </div>
                </div>
            </form>
            <!-- Displaying Movies -->
            <div class="display-container">
                <div class="display-infos" id="movie-infos">
                    <div class="display-label">
                        <h3>Movie Name</h3>
                    </div>
                    <div class="display-value">
                        Spiderman: Work From Home
                    </div>
                </div>  

                <div class="display-infos" id="movie-infos">
                    <div class="display-label">
                        <h3>Start Time</h3>
                    </div>
                    <div class="display-value">
                        22:50
                    </div>
                </div>
                
                <div class="display-infos" id="movie-infos">
                    <div class="display-label">
                        <h3>Duration</h3>
                    </div>
                    <div class="display-value">
                        2 hrs, 3 mins
                    </div>
                </div> 

                <div class="display-infos" id="movie-infos">
                    <div class="display-label">
                        <h3>Cinema</h3>
                    </div>
                    <div class="display-value">
                        4
                    </div>
                </div> 

                <div class="display-infos" id="info-scroll">
                    <div class="display-label">
                        <h3>Information</h3>
                    </div>
                    <div class="display-value">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsum omnis sint sit voluptatem magni vitae repellendus quam cumque maxime.
                    </div>
                </div> 
            </div>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>