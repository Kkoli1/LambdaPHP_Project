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

    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style4.css">
    <title>Checkout</title>
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
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
            </div>  
        </a>
    </header>

    <section class="grid-page-2">
        <div class="left"></div>
        <div class="center">
            <div class="goto-cart-button">
                <a href="cart.php">
                    <div class="gotocart">
                        GO TO CART
                    </div>
                </a>
            </div>
            <div class="center-2">
                <div class="inner-left">
                    <div class="checkout-item">
                        <div class="item-img">
                            <img src="DesignMaterials/Images/imageplaceholder.png" alt="">
                        </div>
                        <div class="item-info">
                            <h2 id="item-name-checkout">Item 1</h2>
                            <h2>Price: <b>7.69</b></h2>
                            <h2>Quantity: <b>1</b></h2>
                        </div>
                    </div>

                    <div class="checkout-item">
                        <div class="item-img">
                            <img src="DesignMaterials/Images/imageplaceholder.png" alt="">
                        </div>
                        <div class="item-info">
                            <h2 id="item-name-checkout">Item 1</h2>
                            <h2>Price: <b>7.69</b></h2>
                            <h2>Quantity: <b>1</b></h2>
                        </div>
                    </div>

                    <div class="checkout-item">
                        <div class="item-img">
                            <img src="DesignMaterials/Images/imageplaceholder.png" alt="">
                        </div>
                        <div class="item-info">
                            <h2 id="item-name-checkout">Item 1</h2>
                            <h2>Price: <b>7.69</b></h2>
                            <h2>Quantity: <b>1</b></h2>
                        </div>
                    </div>
                </div>

                <div class="inner-right">
                    <form action="" method="post" id="checkout-form-form">
                        <div class="checkout-form">
                            <div class="customer-location">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                <h1>Customer Location</h1>
                            </div>
                            <div class="enter-address">
                                <textarea name="enteraddress" id="enteraddress" placeholder="Enter address here" cols="30" rows="10" style="resize: none;"></textarea>
                            </div>
                            <div class="checkout-payout">
                                <h1>Subtotal:</h1>
                                <h1>993.86</h1>
                            </div>
                            <div class="checkout-payout">
                                <h1>Shipping Fee:</h1>
                                <h1>50.00</h1>
                            </div>
                            <br>
                            <div class="checkout-payout">
                                <h1>Total:</h1>
                                <h1>1,043.86</h1>
                            </div>
                            <div class="checkout-submit">
                                <input type="submit" value="CHECK OUT">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>