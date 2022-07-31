<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body onload="reset()">
<div class="sub_main">
            <nav>
                <a href="#" class="logo">
                    <img src="images/restlogo.jpeg" width="170"/>
                </a>
                <ul class="menu">
                    <li><a href="admin.html">Home</a></li>
                    <li><a href="add.php">Add Restaurants</a></li>
                    <li><a href="delete.php">Delete Restaurants</a></li>
                    <li><a href="update.php">Update Restaurants</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>

<?php
if(isset($_POST["submit"])){    
  include_once("config.php");

$sql="UPDATE Restaurants SET Cuisine = '$_POST[cuisine]', Average_Cost = '$_POST[avgcost]', Has_table_booking = $_POST[tablebook], Has_online_booking = $_POST[onlinebook], Rating = '$_POST[rating]', open_timings = '$_POST[timings]', zipcode = '$_POST[zipcode]' WHERE RestaurantName ='$_POST[rest_name]' ";

$result= mysqli_query($mysqli,$sql);
if (mysqli_affected_rows($mysqli) >0) {
    echo "<script>alert(' Restaurant updated added Successfully');</script>";
  } else {
    echo "<script>alert('No matches found for Restaurant Name');</script>";
  }
mysqli_close($mysqli);

}
?>
  <div class="container">
    <center>
    <h1>Update a Restaurant</h1>
    <div class="content">
        <form action="update.php" method="post">

        <div class="user-details">
          <div class="input-box">
            Restaurant Name: <input type="text" maxlength="50" size=55 placeholder="Enter restaurant name" name="rest_name" required> <br/><br/>
          </div>
          <div class="input-box">
            Cuisine: <input type="text" maxlength="50" size=55 placeholder="Enter Cuisine" name="cuisine" >  <br/><br/>
          </div>
          <div class="input-box">
            Average Cost: <input type="text" maxlength="50" size=55 placeholder="Enter Average cost" name="avgcost">  <br/><br/>
          </div>
          <div class="input-box">
            Table Booking Availability: <input type="text" maxlength="50" size=55 placeholder="Table Booking Availability" name="tablebook"> <br/><br/>
          </div>
          <div class="input-box">
            Online Booking Availability: <input type="text" maxlength="50" size=55 placeholder="Online Booking Availability" name="onlinebook"> <br/><br/>
          </div>
          <div class="input-box">
            Rating: <input type="text"  size=5 placeholder="Rating"  name="rating"> <br/><br/>
          </div>
          <div class="input-box">
            Open Timings: <input type="text" size=55 placeholder="Enter timings" name="timings"> <br/><br/>
          </div>
          <div class="input-box">
           Zipcode: <input type="text"  size=15 placeholder="Enter Zipcode" name="zipcode"> <br/><br/>
          </div>
        </div>
        <div class="button">
          <input type="submit" class="reset" value="Reset" onclick="reset()">
          <input type="submit" class="submit" value="Submit" name="submit">
        </div>
    </form>
    </div>
    </center>
  </div>
  <script>
    function reset(){
      document.getElementById("content").reset();
    }
  </script>
  </div>
</body>
</html>