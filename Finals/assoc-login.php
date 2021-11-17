<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Admin Login</title>
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

    <section class="form-container">
        <div class="card text-center" style="width: 500px; margin-left: auto; margin-right: auto; border: 1px solid rgba(51, 71, 86,1); border-radius: 25px;">
            <div class="card-body">
                <div class="admin-login-img">
                    <img src="DesignMaterials/Icons/outline_manage_accounts_black_48dp.png" alt="">
                    <h1>Associate</h1>
                </div>
                <form action="assoc-menu.php" method="post" class="form">  
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" style="border-radius: 20px;">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="border-radius: 20px;">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input type="submit" value="LOGIN" class="btn btn-primary" style="margin-top: 15px;" id="submit-button">
                </form> 
            </div>  
        </div>
        <div class="back-button">
            <a href="admin-assoc-login.php">< Back</a>
        </div>
    </section>
</body>
</html>