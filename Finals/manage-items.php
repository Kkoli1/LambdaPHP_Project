<?php
session_start();
include ("dbconnect.php");
$query = "SELECT * from inventory where category ='STORE'";
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
    <title>Manage Items</title>
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
            <h2>Logged in as, <a href="assoc-menu.php"><?php echo $_SESSION['username'];?></a></h2>
        </div>
    </header>

    <section class="grid-page-2">
        <div class="left"><a href="assoc-menu.php"><b>←</b></a></div>
        <div class="center">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="manage-items-form-container">
                    <div class="item-row1">
                        <input type="text" name="item_name" id="item-name" placeholder="Enter Item Name">
                    </div>
                    <div class="item-row2">
                        <label for="item-available">Available:</label>
                        <input type="text" name="item_stock" id="item-available">
                        <label for="item-group">Image:</label>
                        <input type="file" name="item_group[]" id="item-group" placeholder="Sample Group 1">
                        <input type="file" name="item_group[]" id="item-group" placeholder="Sample Group 1">
                        <input type="file" name="item_group[]" id="item-group" placeholder="Sample Group 1">
                        <label for="item-price">Price:</label>
                        <input type="text" name="item_price" id="item-price">
                    </div>
                    <div class="item-row3">
                        <textarea name="item_info" id="additional-info" cols="30" rows="10" placeholder="Enter Additional Info"></textarea>
                    </div>
                    <div class="item-submit">
                        <input type="submit" name = 'submit' value="+">
                    </div>
                </div>

                <?php

                    if (isset($_POST['submit'])){

                        $item_name = $_POST['item_name'];
                        $item_stock = $_POST['item_stock'];
                        $item_price = $_POST['item_price'];
                        $item_info = $_POST['item_info'];
                        $item_seller = $_SESSION['business_id'];

                        

                        $insert = "INSERT INTO inventory (business_id, item_name, item_description, category, price, stock) VALUES ($item_seller, '$item_name', '$item_info', 'STORE', $item_price, $item_stock)";
                        $query = mysqli_query($conn, $insert);

                        $upload_count = count($_FILES['item_group']['name']);
                        $dir = "Items";

                        $command = "SELECT * FROM inventory WHERE item_name = '$item_name' AND business_id = '$item_seller'";
                        $read = mysqli_query($conn, $command);
                        $qValue = mysqli_fetch_array($read);
                        $business_id = $qValue['product_id'];
                        
                        for($i = 0; $i < $upload_count; $i++){
                            $filename = $_FILES['item_group']['name'][$i];
                            $upload = move_uploaded_file($_FILES['item_group']['tmp_name'][$i], $dir. "/". $_FILES['item_group']['name'][$i]);
                            $insert = "INSERT INTO product_photos (product_id, filename) values ($business_id, '$filename')";
                            $query = mysqli_query($conn, $insert);
                        }

                        header("Location: manage-items.php");

                    }
                
                
                ?>

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

            <form action="manage-items.php" method="post" id="delete-form">
                    <div class="delete-form-container">
                        <input type="text" name="product_id" id="delete-business" placeholder="Enter Product ID">
                        <input type="submit" name="Delete" value="Delete" id="Delete">
                    </div> 
                    
            </form>


            <?php 
                    
                    if(isset($_POST['Delete'])){
                        $del_name = $_POST['product_id'];

                        $query = "DELETE FROM product_photos WHERE product_id = $del_name";
                        mysqli_query($conn, $query);
                        
                        $query = "DELETE FROM inventory WHERE product_id = $del_name";

                        if (!mysqli_query($conn, $query)){
                            echo("Error description: " . mysqli_error($conn));
                            echo "<h3 style = 'color:red; text-align:center'>No Existing Account Name</h3>";
                        } else {
                            echo "<h3> The Change will apply after the refresh</h3>";
                        }

                    }
                
                
            ?>

        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>