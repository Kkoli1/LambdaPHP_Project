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

    <section class="grid-page-2">
        <div class="left"><a href="admin-menu.php"><b>←</b> </a></div>
        <div class="center">
            <form action="" class="add-business-form">
                <div class="add-business-form-container">
                    <div class="add-business-img-container" style="grid-column: 1/span 1; grid-row: 1/span 3;">
                        <div class="label-container">
                            <label for="logo-upload">Shop Logo</label>
                        </div>
                        <div class="file-choose-container">
                            <input type="file" name="logo-upload" id="logo-upload">
                        </div>
                    </div>
                    <div class="add-shop-name">
                        <input type="text" placeholder="Enter Shop Name" name="shopname" class="new-business-input">
                    </div>
                    <div class="add-account-name">
                        <input type="text" placeholder="Enter Account Name" name="accountname" class="new-business-input">
                    </div>
                    <div class="add-password">
                        <input type="password" placeholder="Enter Password" name="password" class="new-business-input">
                    </div>
                    <div class="add-additional-info" style="grid-column: 2/span 1; grid-row: 4/span 1;">
                        <textarea name="additional-info" id="additional-info" cols="30" rows="10" placeholder="Write Something"></textarea>
                    </div>
                </div>
                <input type="submit" value="+">
            </form>
            <!-- Displaying Business -->
            <div class="display-container-2">
                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Shop & Logo</h3>
                    </div>
                    <div class="display-value">
                        Shop 1
                        Sample Image
                    </div>
                </div>  

                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Account Name</h3>
                    </div>
                    <div class="display-value">
                        Account 1
                    </div>
                </div>
                
                <div class="display-infos" id="business-infos">
                    <div class="display-label">
                        <h3>Password</h3>
                    </div>
                    <div class="display-value" id="password-wrap">
                        <?php echo sha1("sample-password") ?>
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