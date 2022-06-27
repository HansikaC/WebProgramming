<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Excercise-3</title>
</head>
<body>
<?php
function triangle($n)
{
	for ($i=1; $i<=$n; $i++)	
    {	 
      for($j=1;$j<=$i;$j++)	  
          {	  	
             echo "* ";	 
          }	  	
    echo "<br/>";   	
    } 
}
$a=$_GET['inputvalue'];
triangle($a);
?>
</body>
</html>