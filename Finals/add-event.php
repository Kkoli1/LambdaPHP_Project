<?php
session_start();
    include("dbconnect.php");

    if (!isset($_SESSION['admin'])){
        header("Location: admin-assoc-login.php");
    }

    if (isset($_SESSION['business_id'])){
        header("Location: assoc-menu.php");
    }

    $query = "SELECT * from events";
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
    <title>Add Event</title>
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
        <div class="left"><a href="admin-menu.php"><b>←</b></a></div>
        <div class="center">
            <form method = "POST">
                <div class="add-event-form-container">
                    
                    <div class="event-row-1">
                        <div class="event-name">
                            <input type="text" name="event_name" id="event-name" placeholder="Enter Event Name">
                        </div>
                        <div class="event-start">
                            <label for="event-start">Start: </label>
                            <input type="date" name="event_start" id="event-start">
                        </div>
                        <div class="event-end">
                            <label for="event-end">End: </label>
                            <input type="date" name="event_end" id="event-end">
                        </div>
                    </div>

                    <div class="event-additional-info">
                        <textarea name="event_info" id="additional-info" cols="30" rows="10" placeholder="Enter Additional Info"></textarea>
                    </div>

                    <div class="event-submit">
                        <input type="submit" value="+" name = "submit">
                    </div>
                </div>

                <?php 
                  
                if (isset($_POST['submit'])){
                    $event_name= $_POST['event_name'];
                    $event_start = $_POST['event_start'];
                    $event_end = $_POST['event_end'];
                    $event_info = $_POST['event_info'];
                    $insert = "INSERT INTO events (event_title, event_description, start_date, end_date) VALUES ('$event_name','$event_info','$event_start','$event_end')";
                    
                    if (!mysqli_query($conn, $insert)){
                        echo("Error description: " . mysqli_error($conn));
                        echo "<h3 style = 'color:red; text-align:center'>Wrong Input Values, review values</h3>";
                    } else {
                        header("Location: add-event.php");
                    }
               
                }
                
                ?>


            </form>
            <!-- Displaying Event -->

            <?php 
                if (mysqli_num_rows($result) == 0){
                    
                } else {

                    while ($qValue = mysqli_fetch_assoc($result)){

                
            ?>


                <div class="display-container">
                    <div class="display-infos" id="event-infos">
                        <div class="display-label">
                            <h3>Event Name</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['event_title'];?>
                        </div>
                    </div>  

                    <div class="display-infos" id="event-infos">
                        <div class="display-label">
                            <h3>Start Date</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['start_date'];?>
                        </div>
                    </div>
                    
                    <div class="display-infos" id="event-infos">
                        <div class="display-label">
                            <h3>End Date</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['end_date'];?>
                        </div>
                    </div> 

                    <div class="display-infos" id="info-scroll">
                        <div class="display-label">
                            <h3>Information</h3>
                        </div>
                        <div class="display-value">
                            <?php echo $qValue['event_description'];?>
                        </div>
                    </div> 
                </div>

            <?php 
                }
            }
            ?>

                <form action="add-event.php" method="post" id="delete-form">
                    <div class="delete-form-container">
                        <input type="text" name="event" id="delete-business" placeholder="Enter Event Name">
                        <input type="submit" name="Delete" value="Delete" id="Delete">
                    </div> 
                    
                    <?php 
                    
                        if(isset($_POST['Delete'])){
                            $del_name = $_POST['event'];

                            $query = "DELETE FROM events WHERE event_title = '$del_name'";

                            if (!mysqli_query($conn, $query)){
                                echo("Error description: " . mysqli_error($conn));
                                echo "<h3 style = 'color:red; text-align:center'>No Existing Account Name</h3>";
                            } else {
                                echo "<h3> The Change will apply after the refresh</h3>";
                            }

                        }
                    
                    
                    ?>



                </form>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>