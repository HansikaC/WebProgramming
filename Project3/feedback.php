<!DOCTYPE html>
<html>
<head>
    
</head>


<body>
<?php
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
?>
</body>
</html>





