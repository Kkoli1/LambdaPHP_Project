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
                <form action="" class="register-form">
                    <input type="text" placeholder="Username" name="username" class="inputs">
                    <input type="password" placeholder="Password" name="password" class="inputs">
                   <div class="contain">
                        <div class="sex"> 
                            <label for="sex" id="sex-text">Sex:</label>
                            <label for="sex">M</label>
                            <input type="radio" name="sex" id="male">
                            <label for="sex">F</label>
                            <input type="radio" name="sex" id="female">
                        </div>
                        <div class="bday">
                            <label for="bday">Birthday:</label>
                            <input type="date" name="bday" id="bday">
                        </div>
                        
                   </div>
                    
                    <input type="email" name="email" id="email" placeholder="Email" class="inputs">
                    <input type="text" name="address" id="address" placeholder="Address" class="inputs">
                    <div class="submit-container">
                        <input type="submit" name="submit" id="register-submit" value="SUBMIT"> 
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>