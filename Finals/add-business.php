<?php

    include("dbconnect.php");

    $query = "SELECT * from business";
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

    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style4.css">
    <title>Add Business</title>
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
            <form action="" class="add-business-form" enctype="multipart/form-data" method = "POST">
                <div class="add-business-form-container">
                    <div class="add-business-img-container" style="grid-column: 1/span 1; grid-row: 1/span 3;">
                        <div class="label-container">
                            <label for="logo-upload">Shop Logo</label>
                        </div>
                        <div class="file-choose-container">
                            <input type="file" name="logo">
                        </div>
                    </div>
                    <div class="add-shop-name">
                        <input type="text" placeholder="Enter Shop Name" name="shopname" class="new-business-input">
                    </div>
                    <div class="add-account-name">
                        <input type="text" placeholder="Enter Account Name" name="accountname" class="new-business-input" id="business-account-name">
                        <select name="category" id="category">
                            <option value="DEFAULT">SELECT A CATEGORY:</option>
                            <option value="RESTAURANT">RESTAURANT</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="SERVICES">SERVICES</option>
                            <option value="GENEREAL">GENERAL</option>
                            <option value="ADMIN">CLOTHING</option>
                        </select>
                    </div>
                    <div class="add-password">
                        <input type="password" placeholder="Enter Password" name="password" class="new-business-input">
                    </div>
                    <div class="add-additional-info" style="grid-column: 2/span 1; grid-row: 4/span 1;">
                        <textarea name="additional" id="additional-info" cols="30" rows="10" placeholder="Write Something"></textarea>
                    </div>
                </div>
                <input type="submit" value="+" name = "submit">

                <?php 
                
                if (isset($_POST['submit'])){
                    $dir = "BusinessLogos";
                    $upload = move_uploaded_file($_FILES['logo']['tmp_name'], $dir. "/". $_FILES['logo']['name']);
                    $username = $_POST['accountname'];
                    $filename = $_FILES['logo']['name'];
                    $password = sha1($_POST['password']);
                    $category = $_POST['category'];
                    $name = $_POST['shopname'];
                    $additional = $_POST['additional'];
                    $insert = "INSERT INTO business (username,photo,password,category,business_name,business_description) VALUES ('$username','$filename','$password','$category','$name','$additional')";
                    
                    if (!mysqli_query($conn, $insert)){
                        echo("Error description: " . mysqli_error($conn));
                        echo "<h3 style = 'color:red; text-align:center'>Wrong Input Values, review values</h3>";
                    } else {
                        header("Location: add-business.php");
                    }
               
                }

                
                
                ?>

            </form>
            <!-- Displaying Business -->
            <?php 
                if (mysqli_num_rows($result) == 0){
                    echo "<h3 style = 'color:red'> DB is EMPTY </h3>";
                } else {

                    while ($qValue = mysqli_fetch_assoc($result)){

                
                ?>
                    <div class="display-container-2">
                            <div class="display-infos" id="business-infos">
                                <div class="display-label">
                                    <h3>Shop & Logo</h3>
                                </div>
                                <div class="display-value" id="display-img-business">
                                    <img src=<?php echo "BusinessLogos/$qValue[photo]" ?>>
                                </div>    
                                
                            </div>  

                            <div class="display-infos" id="business-infos">
                                <div class="display-label">
                                    <h3>Account Name</h3>
                                </div>
                                <div class="display-value">
                                    <?php echo $qValue['business_name'];?>
                                </div>
                            </div>
                            
                            <div class="display-infos" id="business-infos">
                                <div class="display-label">
                                    <h3>Password</h3>
                                </div>
                                <div class="display-value" id="password-wrap">
                                    <?php echo $qValue['password'];?>
                                </div>
                            </div> 

                            <div class="display-infos" id="info-scroll">
                                <div class="display-label">
                                    <h3>Information</h3>
                                </div>
                                <div class="display-value">
                                    <?php echo $qValue['business_description'];?>
                                </div>
                            </div> 
                
                    </div>
                    <?php 
                       }
                }
                ?>
                <form action="add-business.php" method="post">
                    <div class="delete-form-container">
                        <input type="text" name="business" id="delete-business" placeholder="Enter Account Name">
                        <input type="submit" name="Delete" value="Delete" id="Delete">
                    </div> 
                    
                    <?php 
                    
                        if(isset($_POST['Delete'])){
                            $del_account_name = $_POST['business'];

                            $query = "DELETE FROM business WHERE business_name = '$del_account_name'";

                            if (!mysqli_query($conn, $query)){
                                echo("Error description: " . mysqli_error($conn));
                                echo "<h3 style = 'color:red; text-align:center'>No Existing Account Name</h3>";
                            } else {
                                echo "<h3 style = 'color:green; text-align:center'>The Change will apply after the refresh</h3>";
                            }

                        }
                    
                    
                    ?>
                </form>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>