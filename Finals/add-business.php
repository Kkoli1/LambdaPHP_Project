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
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>