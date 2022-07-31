<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<link href="formcss.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
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
                <li><a href="aboutu.php">About us</a></li>
                <li><a href="#" class="active">Contact us</a></li>
            </ul>
        </nav>
        <center>
        <h3 style='color:rgb(59, 31, 11)'>For all the further enquiries, you can send an email to Us at restaurantsearch@gmail.com</h3>
        &nbsp; &nbsp; &nbsp;
        </center> 

        <?php
if (isset($_POST["submit"])){
include_once("config.php");

$sql = "INSERT INTO Feedbacks(FeedbackUserName, Email, sugg_feedback, Rating) 
VALUES ('$_POST[vname]','$_POST[vemail]','$_POST[sub]','$_POST[rating]')";

if (mysqli_query($mysqli, $sql)&& $mysqli->affected_rows > 0)  {
// echo "Insert record successfully";
echo "<script>alert('Feedback sent Successfully');</script>";
} else {
// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script>alert('Enter the fields correctly');</script>";
}
mysqli_close($mysqli);
}
?>
        
            <div class="container">
                <div id="feedback">
                    <div class="head">
                        <h3 style='color:rgb(59, 31, 11)'>FeedBack Form</h3>
                        <br>
                    </div>
                    <form action="contactus.php" id="form" method="post" name="form">
                        Name : <input name="vname" placeholder="Your Name" type="text" value="" required><br/>
                        Email : <input name="vemail" placeholder="Your Email" type="text" value="" ><br/>
                        Subject : <input name="sub" placeholder="Subject" type="text" value=""><br/>
                        Rating : <input name="rating" placeholder="Rating" type="text" value=""><br/>
                        <label style='color:rgb(59, 31, 11)'>Your Suggestion/Feedback</label>
                        <textarea name="msg" placeholder="Type your text here..."></textarea><br/>
                        <br/>
                        <input name="submit" type="submit" value="Send Feedback" name="submit">
                    </form>
                </div>
            </div>
</div>
</body>
<!-- Body Ends Here -->
</html>


<html>

<head>
</head>
<body>
  
