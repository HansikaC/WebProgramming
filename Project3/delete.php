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
                    <li><a href="#" class="active">Delete Restaurants</a></li>
                    <li><a href="update.php">Update Restaurants</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>


<?php
if(isset($_POST["submit"])){    
  include_once("config.php");

$sql="DELETE FROM Restaurants WHERE RestaurantName = '$_POST[rest_name]' ";
$result = mysqli_query($mysqli, $sql);
if ($mysqli->affected_rows > 0) {
  echo "<script>alert('Restaurant deleted Successfully');</script>";
} else {
  echo "<script>alert('No matches found');</script>";
}
mysqli_close($mysqli);

}
?>
  <div class="container">
<center>
    <h1>Delete a Restaurant</h1>
    <div class="content">
        <form action="delete.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Restaurant Name</span>
            <input type="text" maxlength="50" size=55 placeholder="Enter restaurant name" name="rest_name" required>
          </div>

        <div class="button1">
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