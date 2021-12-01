<?php
session_start();
include("dbconnect.php");

$customer_id = $_SESSION['user']['Customer_ID'];
$product_id = $_GET['product_id'];
$order_id = $_GET['order_id'];

$custResult = mysqli_query($conn, "SELECT * FROM address WHERE customer_id = $customer_id");
$Qaddress = mysqli_fetch_array($custResult);

$address = "";
$city = "";
$state = "";
$zipcode = "";
$country = "";

if (isset($Qaddress['Street_Address'])){
    $address = $Qaddress['Street_Address'];
}

if (isset($Qaddress['city'])){
    $city = $Qaddress['city'];
}

if (isset($Qaddress['state'])){
    $state = $Qaddress['state'];
}

if (isset($Qaddress['Street_Address'])){
    $zipcode = $Qaddress['zipcode'];
}

if (isset($Qaddress['country'])){
    $country = $Qaddress['country'];
}

$finAddress = "$address, $city $state, $country";


$productQ = "SELECT * FROM inventory WHERE product_id = $product_id";
$productR = mysqli_query($conn, $productQ);
$productInfo = mysqli_fetch_array($productR);
$productPicQ = "SELECT * FROM product_photos WHERE product_id = $product_id";
$productPicR = mysqli_query($conn, $productPicQ);
$productPic = mysqli_fetch_array($productPicR);
$filename = "Items/".$productPic['filename'];

$delivQuery = "SELECT * FROM delivery WHERE order_id = $order_id";
$delivResult = mysqli_query($conn, $delivQuery);

$delivInfo = mysqli_fetch_array($delivResult);




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Personal CSS -->
        <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
        <link rel="stylesheet" href="css/navigation-general.css">
        <link rel="stylesheet" href="css/style5.css">
        <title>Order Status</title>
    </head>
    <body>
        <!-- Start of Header -->
        <header class="main-screen-header">
            <a href="mainscreen.php" class="logo-link">
                <div class="logo-container">
                    <img src="DesignMaterials/Icons/undraw_cabin_hkfr.png" alt="Mall Logo Image" style="grid-column: 1/span 1; grid-row: 1/span 2;">
                    <h1 class="abc-mall">ABC Mall</h1>
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
                    <a href=""><img class="shop-cart" src="DesignMaterials/Icons/shopping_cart_white_24dp.svg" alt="shopping cart icon"></a>
                    <?php if (isset($_SESSION['user'])){ ?>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#0B960A"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                    <?php } else { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                    <?php header("Location: customer-login.php");}?>
                </div>  
            </a>
        </header>
        <!-- End of Header -->

        <!-- Start of Order Status Container -->
        <div class="order-status-container">
            <div class="os-left">
                <div class="os-left-item">
                    <img src=<?php echo $filename;?> alt="DesignMaterials/Icons/image_black_24dp.svg">
                </div>
                <div class="os-left-text">
                    <h2><?php echo $productInfo['item_name'];?></h2>
                    <h3 id="os-left-text-price">PHP <?php echo $productInfo['price'];?></h3>
                    <h3>Arrival: <?php echo $delivInfo['date_of_delivery'];?></h3>
                </div>
            </div>
            
            <div class="os-right">
                <div class="os-right-text">
                    <h2>Status of Shipping</h2>
                    <h3>Order ID: <span><?php echo $order_id;?></span></h3>
                    <h3>Address:
                        <span>
                        <?php echo $finAddress; ?>
                        </span>
                    </h3>
                    <h3>Status: <span>To be delivered</span></h3>
                </div>
                
            </div>
        </div>
        <!-- End of Order Status Container -->
    </body>
</html>