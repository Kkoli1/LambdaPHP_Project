<?php
session_start();
include ("dbconnect.php");
$query = "SELECT * from inventory where category ='ECOMMERCE'";
$result = mysqli_query($conn, $query);

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
            <h2>Logged in as, <a href="assoc-menu.php"><?php echo $_SESSION['username']?></a></h2>
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
                        <label for="item-group">Photos:</label>
                        <input type="file" name="item_group[]" id="item-group" placeholder="Sample Group 1">
                        <input type="file" name="item_group[]" id="item-group" placeholder="Sample Group 1">
                        <input type="file" name="item_group[]" id="item-group" placeholder="Sample Group 1">
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




            
            <?php 

                if (mysqli_num_rows($result) == 0){
                    
                } else {

                     while ($qValue = mysqli_fetch_assoc($result)){
                    
            ?>

                <div class="display-container">


                    <div class="display-infos" id="business-infos">
                        <div class="display-label">
                            <h3>Item ID</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['product_id'];?>
                        </div>
                    </div>  


                    <div class="display-infos" id="business-infos">
                        <div class="display-label">
                            <h3>Item Name</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['item_name'];?>
                        </div>
                    </div>  

                    <div class="display-infos" id="business-infos">
                        <div class="display-label">
                            <h3>Stock</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['stock'];?>
                        </div>
                    </div>
                    

                    <div class="display-infos" id="business-infos">
                        <div class="display-label">
                            <h3>Price</h3>
                        </div>
                        <div class="display-value" id="password-wrap">
                            <?php echo $qValue['price'];?>
                        </div>
                    </div> 

                    <div class="display-infos" id="info-scroll">
                        <div class="display-label">
                            <h3>Information</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['item_description'];?>
                        </div>
                    </div> 
                </div>
            <?php
                    }
                }
            ?>
            

            <form action="add-business.php" method="post" id="delete-form">
                    <div class="delete-form-container">
                        <input type="text" name="business" id="delete-business" placeholder="Enter Account Name">
                        <input type="submit" name="Delete" value="Delete" id="Delete">
                    </div>       
            </form>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>