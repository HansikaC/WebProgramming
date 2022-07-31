<?php

include_once("config.php");
  
if(empty($_POST["Cuisine"]) or empty($_POST["zipcode"])){
    $sql = "SELECT * FROM Restaurants WHERE Cuisine='$_POST[Cuisine]' or zipcode='$_POST[zipcode]'";
}
else{
    $sql = "SELECT * FROM Restaurants WHERE Cuisine='$_POST[Cuisine]' and zipcode='$_POST[zipcode]'";
}

$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <!-- CSS FOR STYLING THE PAGE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
  
<body>
    <section>
        <!-- TABLE CONSTRUCTION-->
        <center>
        <table>
            <tr>
                <th>Restaurant Name</th>
                <th>Cuisine</th>
                <th>Average Cost</th>
                <th>Prior Table booking</th>
                <th>online Ordering</th>
                <th>Rating</th>
                <th>Zipcode</th>
                <th>Timings</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 

                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['RestaurantName'];?></td>
                <td><?php echo $rows['Cuisine'];?></td  >
                <td><?php echo $rows['Average_Cost'];?></td>
                <td><?php echo $rows['Has_table_booking'];?></td>
                <td><?php echo $rows['Has_online_booking'];?></td>
                <td><?php echo $rows['Rating'];?></td>
                <td><?php echo $rows['zipcode'];?></td>
                <td><?php echo $rows['open_timings'];?></td>   
            </tr>
            <?php
                }
             ?>
        </table>
        </center>
    </section>
</body>
  
</html>