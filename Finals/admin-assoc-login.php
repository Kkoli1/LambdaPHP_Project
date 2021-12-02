<?php 
session_start();

if (isset($_SESSION['business_id'])){
    header("Location: assoc-menu.php");
}
if (isset($_SESSION['admin'])){
    header("Location: admin-menu.php");
}


if(isset($_GET['logout'])){
    session_destroy();
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
    <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Admin/Associate Login</title>
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
    </header>

    <section class="admin-assoc-choose" >
        <div class="choose" id="admin-choose">
            <div class="image-container">
                <img src="DesignMaterials/Icons/admin_panel_settings_black_24dp.svg" alt="admin-icon">
            </div>
            
            <div class="choose-label">
                Admin
            </div>
            <div class="choose-button">
                <a href="admin-login.php">
                    <div>
                        Choose
                    </div>
                </a>
            </div>
        </div>
        <div class="choose" id="assoc-choose">
            <div class="image-container">
                <img src="DesignMaterials/Icons/manage_accounts_black_24dp.svg" alt="manage-accounts-icon">
            </div>
            
            
            <div class="choose-label">
                Associate
            </div>
            
            <div class="choose-button">
                <a href="assoc-login.php">
                    <div>
                        Choose
                    </div>
                </a>   
            </div>
        </div>
        
    </section>
</body>
</html>