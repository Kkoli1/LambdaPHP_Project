<?php
session_start();
    include("dbconnect.php");

    if (isset($_SESSION['admin'])){
        header("Location: admin-menu.php");
    }
    if (isset($_SESSION['business_id'])){
        header("Location: assoc-menu.php");
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
    <link rel="stylesheet" href="css/style4.css">
    <title>Customer Register</title>
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

    <section class="grid-page">
        <div class="left"><a href="customer-login.php"><b>←</b> </a></div>
        <div class="center">
            <div class="register-form-container">
                <div class="img-container">
                    <img src="DesignMaterials/Icons/outline_account_circle_white_48dp.png" alt="Customer Icon">
                </div>
                <form action="" method="POST" class="register-form">
                    
                    
                    <input type="text" placeholder="First Name" name="first_name" class="inputs">
                    <input type="text" placeholder="Last Name" name="last_name" class="inputs">
                    <input type="text" placeholder="Username" name="username" class="inputs">
                    <input type="password" placeholder="Password" name="password" class="inputs">
                    <input type="password" placeholder="Confirm Password" name="confirmpassword" class="inputs">
                   <div class="contain">
                        <div class="sex"> 
                            <label for="sex" id="sex-text">Sex:</label>
                            <label for="sex">M</label>
                            <input type="radio" name="sex" id="male" value="male">
                            <label for="sex">F</label>
                            <input type="radio" name="sex" id="female" value="male">
                        </div>
                        <div class="bday">
                            <label for="bday">Birthday:</label>
                            <input type="date" name="bday" id="bday">
                        </div>
                        
                   </div>
                    
                    <input type="email" name="email" id="email" placeholder="Email" class="inputs">
                    <h2 style = "text-align: center">Address:</h2>
                    <input type="text" name="street_address" id="address" placeholder="Street Address" class="inputs">
                    <input type="text" name="city" id="address" placeholder="City" class="inputs">
                    <input type="text" name="state" id="address" placeholder="State" class="inputs">
                    <input type="text" name="zipcode" id="address" placeholder="Zipcode" class="inputs">
                    <input type="text" name="country" id="address" placeholder="Country" class="inputs">
                    <div class="submit-container">
                        <input type="submit" name="submit" id="register-submit" value="SUBMIT"> 
                    </div>
                    

                    <?php 
                    
                        if(isset($_POST['submit'])){
                            $first_name = $_POST['first_name'];
                            $last_name = $_POST['last_name'];
                            $username = $_POST['username'];
                            if ($_POST['password'] == $_POST['confirmpassword']){
                                $user_password = sha1($_POST['password']);
                            } else {
                                echo "Check password";
                            }
                            $email = $_POST['email'];
                            $sex = $_POST['sex'];
                            $date = $_POST['bday'];

                            $insert = "INSERT INTO customer (first_name, last_name, username, user_password, email, sex, date) VALUES ('$first_name', '$last_name', '$username', '$user_password', '$email', '$sex', '$date')";
                            if (!$query = mysqli_query($conn, $insert)){
                                echo "Please enter the right credentials";
                            };

                            $getID = "SELECT * FROM customer WHERE username = '$username'";
                            $result = mysqli_query($conn, $getID);
                            $row = mysqli_fetch_array($result);
                            $customer_id = $row['Customer_ID'];
                            


                            $street_address = '';
                            if (isset($_POST['street_address'])){
                                $street_address = $_POST['street_address'];
                            }
                            
                            $city = '';
                            if (isset($_POST['city'])){
                                $city = $_POST['city'];
                            }

                            $state = '';
                            if (isset($_POST['state'])){
                                $state = $_POST['state'];
                            }

                            $zipcode = '';
                            if (isset($_POST['zipcode'])){
                                $zipcode = $_POST['zipcode'];
                            }

                            $country = '';
                            if (isset($_POST['country'])){
                                $country = $_POST['country'];
                            }
                            
                            $insert = "INSERT INTO address (customer_id, street_address, city, state, zipcode, country) VALUES ($customer_id, '$street_address', '$city', '$state', $zipcode, '$country')";
                            $result = mysqli_query($conn, $insert);

                        }
                    
                    ?>

                </form>
            </div>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>