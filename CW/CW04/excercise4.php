<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Excercise-4</title>
</head>
<body>
	<?php function word_count($sentence)
     { 
	echo "The sentence is : ".$sentence;
	echo "<br/>";
    $count=0;
    for($i=0;$i<strlen($sentence);$i++)
    {
        if($sentence[$i]==' '||$i==strlen($sentence)-1 ){
        $count=$count+1;
        }
    }
echo "The number of words : ".$count;
}
	$a=$_GET['inputvalue'];
    word_count($a);
	?>
</body>
</html>