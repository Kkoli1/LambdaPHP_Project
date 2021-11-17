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
    <title>Manage Front Page</title>
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

    <section class="grid-page">
        <div class="left"><a href="admin-menu.php"><b>←</b> </a></div>
        <div class="center">
            <div class="manage-front-page-container">
                <h3>Select Articles</h3>
                <br>
                <form action="">
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article-1" id="Article-1" value="Article 1">
                            <label for="Article-1">Article 1</label>
                        </div>
                        <div class="delete-button">
                            <input type="button" value="Delete">
                        </div>
                    </div>
                    <br>
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article-2" id="Article-2" value="Article 2">
                            <label for="Article-2">Article 2</label>
                        </div>
                        <div class="delete-button">
                            <input type="button" value="Delete">
                        </div>
                    </div>
                    <br>
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article-3" id="Article-3" value="Article 3">
                            <label for="Article-3">Article 3</label>
                        </div>
                        <div class="delete-button">
                            <input type="button" value="Delete">
                        </div>
                    </div>
                    <br>
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article-4" id="Article-4" value="Article 4">
                            <label for="Article-4">Article 4</label>
                        </div>
                        <div class="delete-button">
                            <input type="button" value="Delete">
                        </div>
                    </div>
                    <br>
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article-5" id="Article-5" value="Article 5">
                            <label for="Article-5">Article 5</label>
                        </div>
                        <div class="delete-button">
                            <input type="button" value="Delete">
                        </div>
                    </div>
                    <br>
                    <div class="form-article-container">
                        <div class="form-article">
                            <input type="checkbox" name="Article-6" id="Article-6" value="Article 6">
                            <label for="Article-6">Article 6</label>
                        </div>
                        <div class="delete-button">
                            <input type="button" value="Delete">
                        </div>
                    </div>

                    <input type="submit" value="Submit" class="form-article-submit">
                </form>
            </div>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>