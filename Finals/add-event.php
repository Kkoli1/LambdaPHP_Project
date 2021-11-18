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
                <div class="add-event-form-container">
                    
                    <div class="event-row-1">
                        <div class="event-name">
                            <input type="text" name="event-name" id="event-name" placeholder="Enter Event Name">
                        </div>
                        <div class="event-start">
                            <label for="event-start">Start: </label>
                            <input type="date" name="event-start" id="event-start">
                        </div>
                        <div class="event-end">
                            <label for="event-end">End: </label>
                            <input type="date" name="event-end" id="event-end">
                        </div>
                    </div>

                    <div class="event-additional-info">
                        <textarea name="event-info" id="additional-info" cols="30" rows="10" placeholder="Enter Additional Info"></textarea>
                    </div>

                    <div class="event-submit">
                        <input type="submit" value="+">
                    </div>
                </div>
            </form>
            <!-- Displaying Event -->
            <div class="display-container">
                <div class="display-infos" id="event-infos">
                    <div class="display-label">
                        <h3>Event Name</h3>
                    </div>
                    <div class="display-value">
                        Spiderman: Work From Home
                    </div>
                </div>  

                <div class="display-infos" id="event-infos">
                    <div class="display-label">
                        <h3>Start Date</h3>
                    </div>
                    <div class="display-value">
                        2021-11-09
                    </div>
                </div>
                
                <div class="display-infos" id="event-infos">
                    <div class="display-label">
                        <h3>End Date</h3>
                    </div>
                    <div class="display-value">
                        2021-11-18
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