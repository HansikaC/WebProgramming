<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Excercise-5</title>
</head>
<body>
	<?php function countWords($str)
{
	$str=strtolower($str);
	$words=explode(" ",$str);
	echo "The String is : ".$str;
	echo "<br/>";
	$counts = array_count_values($words); 
    print_r($counts );
}
$a=$_GET['inputvalue'];
    countWords($a);
 ?>
</body>
</html>