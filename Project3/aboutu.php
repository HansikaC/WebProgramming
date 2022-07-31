<?php

include_once("config.php");
  

$sql = "SELECT * FROM Feedbacks LIMIT 3";


$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<!-- Body Starts Here -->
<body>
    <div class="sub_main">
        <nav>
            <a href="#" class="logo">
                <img src="images/restlogo.jpeg" width="170"/>
            </a>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="restaurants_with_us.php">Restaurants With Us</a></li>
                <li><a href="#" class="active">About us</a></li>
                <li><a href="contactus.php">Contact us</a></li>
            </ul>
        </nav>
        <center>
            <p> An application for finding restaurants in your locality based on the choice of your cuisine and reviews from local experts.</p>
            &nbsp; &nbsp; &nbsp;
            <h3>Our top Reviews</h3>
            <?php  

                while($rows=$result->fetch_assoc())
                {
             ?>
            
            <div class="restaurant-grid">
            <div class="restaurant-grid__item"><article class="card">
                <div class="card__info">
                    <h3 class="card__title"><?php echo $rows['sugg_feedback'];?></h3>
                 </div>
                <p>
                    <div class="card__address">User Name: <?php echo $rows['FeedbackUserName'];?></div> 
                    <div class="card__address card__address--city">Rating: <?php echo $rows['Rating'];?></div>
                </p>
            </div>
        </div>
            <?php
                }
             ?>
        </center>            
</div>
</body>
</html>