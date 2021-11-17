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
            <h2>Logged in as, <a href="assoc-menu.php">Associate</a></h2>
        </div>
    </header>

    <section class="grid-page-2">
        <div class="left"><a href="assoc-menu.php"><b>←</b></a></div>
        <div class="center">
            <form action="#">
                <div class="manage-items-form-container">
                    <div class="item-row1">
                        <input type="text" name="item-name" id="item-name" placeholder="Enter Item Name">
                    </div>
                    <div class="item-row2">
                        <label for="item-available">Available:</label>
                        <input type="text" name="item-available" id="item-available">
                        <label for="item-group">Group:</label>
                        <input type="text" name="item-group" id="item-group" placeholder="Sample Group 1">
                        <label for="item-price">Price:</label>
                        <input type="text" name="item-price" id="item-price">
                    </div>
                    <div class="item-row3">
                        <textarea name="item-info" id="additional-info" cols="30" rows="10" placeholder="Enter Additional Info"></textarea>
                    </div>
                    <div class="item-submit">
                        <input type="submit" value="+">
                    </div>
                </div>
            </form>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>