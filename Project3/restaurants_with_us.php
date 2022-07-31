<?php

include_once("config.php");
  
    $sql = "SELECT * FROM Restaurants";


$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
  
<body>
<div class="sub_main">
        <nav>
            <a href="#" class="logo">
                <img src="images/restlogo.jpeg" width="170"/>
            </a>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#" class="active">Restaurants With Us</a></li>
                <li><a href="aboutu.php">About us</a></li>
                <li><a href="contactus.php">Contact us</a></li>
            </ul>
        </nav>
           
    <center><h1>Restaurants With Us</h1></center>
    <section>
    <?php   // LOOP TILL END OF DATA 

while($rows=$result->fetch_assoc())
{
?>
<div class="restaurant-grid">
            <div class="restaurant-grid__item"><article class="card">
                <div class="card__info">
                    <h3 class="card__title"><?php echo $rows['RestaurantName'];?></h3>
                 </div>
                <p>
                    <div class="card__address">Cuisine: <?php echo $rows['Cuisine'];?></div> 
                    <div class="card__address card__address--city">Cost For Two: <?php echo $rows['Average_Cost'];?></div>
                    <div class="card__address">Rating: <?php echo $rows['Rating'];?></div> 
                    <div class="card__address">ZipCode: <?php echo $rows['zipcode'];?></div> 
                </p>
            </div>
        </div>
<?php
}
?>
        
    </section>
</body>
  
</html>