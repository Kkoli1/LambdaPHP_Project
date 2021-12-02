<?php
session_start();
include("dbconnect.php");

if (isset($_SESSION['admin'])){
    header("Location: admin-menu.php");
}
if (isset($_SESSION['business_id'])){
    header("Location: assoc-menu.php");
}


if (isset($_POST['submit'])){
    $newDate = Date("y/m/d", strtotime('+3 days'));
    $customer_id = $_POST['customer_id'];

    $totalprice = $_POST['total'];

    

    $insert = "INSERT INTO customer_orders (customer_id, price) VALUES ($customer_id, $totalprice)";
    mysqli_query($conn, $insert);

    $query = mysqli_query($conn, "SELECT MAX(order_id) FROM customer_orders");
    $result = mysqli_fetch_array($query);
    $order_id = $result['MAX(order_id)'];
    
    $insert = "INSERT INTO delivery (order_id, date_of_delivery) VALUES ($order_id, '$newDate')";
    mysqli_query($conn, $insert);

    echo count($_POST['product_id']);
    for($i = 0; $i < count($_POST['product_id']); $i++ ){
        
        if($_POST['product_id'][$i] == 0){
            echo "skipped: ".$_POST['product_id'][$i];
            continue;
        }else {
        $product_id = $_POST['product_id'][$i];
        $quantity = $_POST['quantity'][$i];
        $price = $_POST ['price'][$i];
        $business_id = $_POST ['business_id'][$i];
        $insertO = "INSERT INTO orders (order_id, product_id, quantity, total_price, business_id) VALUES ($order_id, $product_id, $quantity, $price, $business_id);";
        $newRes = mysqli_query($conn, $insertO);     
        
        $query = mysqli_query($conn, "SELECT stock FROM inventory WHERE product_id = $product_id");
        $stock_result = mysqli_fetch_array($query);
        $stock = $stock_result['stock'];
        $stock = $stock - $quantity;
        $update_stock = "UPDATE inventory SET stock = $stock WHERE product_id = $product_id";
        mysqli_query($conn, $update_stock);
        $delete_cart = "DELETE FROM cart WHERE product_id = $product_id AND customer_id = $customer_id ";
        mysqli_query($conn, $delete_cart);
        }
    }

    


}


if (!isset($_SESSION['user'])) {
    header("Location: customer-login.php");
} else {
 
    $user = $_SESSION['user'];
    $user_id = $user['Customer_ID'];


    $query = "SELECT * FROM cart WHERE customer_id = $user_id";
    $result = mysqli_query($conn, $query);
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
    <title>Cart</title>
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
                    <?php if(isset($_SESSION['user'])){ ?>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#0B960A"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                    <?php } else {?>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                    <?php header("Location: customer-login.php");}?>
                    
            </div>  
        </a>
    </header>

    <section class="grid-page">
        <div class="left"></div>
        <div class="center">
            <div class="button-container-cart">
                <a href="orders.php">
                    <div class="cart-button" id="orders-cart-button">
                        <h4>ORDERS</h4>
                    </div>
                </a>
            
                <div class="checkout-form-container">
                    <form action="checkout.php" method="POST" id=checkout-form>
                        <input type="submit" name = "submit" value="CHECKOUT" id="checkout-cart-button">
                    </form>
                </div>
                
                
            </div>


        <?php 
        


        while ($qValue = mysqli_fetch_assoc($result)){
            $product_id = $qValue['product_id'];
            $productQ = "SELECT * FROM inventory WHERE product_id = $product_id";
            $productR = mysqli_query($conn, $productQ);
            $productInfo = mysqli_fetch_array($productR);
            $productPicQ = "SELECT * FROM product_photos WHERE product_id = $product_id";
            $productPicR = mysqli_query($conn, $productPicQ);
            $productPic = mysqli_fetch_array($productPicR);
            $filename = "Items/".$productPic['filename'];
        ?>
            <div class="cart-item">
                <div class="checkbox-container">
                    <input type="hidden" name="item_checkbox[]" id="item-checkbox" form="checkout-form" value = "0"><input type="checkbox" onclick="this.previousSibling.value=<?php echo $product_id;?>-this.previousSibling.value">
                </div>
                
                <div class="item-img">
                    <img src=<?php echo $filename;?> alt="DesignMaterials/Images/imageplaceholder.png">
                </div>

                <div class="item-name">
                    <h3><?php echo $productInfo['item_name']; ?></h3>
                </div>

                <div class="price-quantity">
                    <h4>Price: <b><?php echo $productInfo['price']; ?></b></h4>
                    <div class="quantity">
                        <h4>Quantity: </h4>
                        <input type="text" default = "0" name="quantity[]" form="checkout-form" >
                        
                    </div>                  
                </div>
            </div>

        <?php 
        
        }    
        
        ?>

        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>