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
    <title>Manage Online Store</title>
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
                        <label for="item-stock">Stock:</label>
                        <input type="text" name="item-stock" id="item-stock">
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
            <!-- Displaying Items -->
            <div class="display-container">
                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Item Name</h3>
                    </div>
                    <div class="display-value">
                        Sample Item 1
                    </div>
                </div>  

                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Stock</h3>
                    </div>
                    <div class="display-value">
                        900
                    </div>
                </div>
                
                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Group</h3>
                    </div>
                    <div class="display-value" id="password-wrap">
                        Sample 
                        Group 1
                    </div>
                </div> 

                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Price</h3>
                    </div>
                    <div class="display-value" id="password-wrap">
                        22.75
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