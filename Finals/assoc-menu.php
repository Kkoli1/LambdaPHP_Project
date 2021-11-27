<?php 
session_start();
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
    <title>Associate Menu</title>
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
    </header>

    <section class="body">
        <div class="admin-menu-container">
            <div class="admin-img"><img src="DesignMaterials\Icons\outline_manage_accounts_black_48dp.png" alt=""></div>
            <div class="label"><h3>Associate Menu</h3></div>
            <div class="admin-menu-button-container">
                <a href="manage-items.php"><div class="admin-menu-button" id="manage-business-info"><h3>Manage Business Information</h3></div></a>
            </div>
            <div class="admin-menu-button-container">
                <a href="manage-online-store.php"><div class="admin-menu-button" id="manage-online-store"><h3>Manage Online Store</h3></div></a>
            </div> 
            <div class="log-out-container">
                <a href="assoc-login.php?logout=1"><div class="admin-logout"><h2>Log Out</h2></div></a>
            </div>
        </div>
    </section>
    
</body>
</html>