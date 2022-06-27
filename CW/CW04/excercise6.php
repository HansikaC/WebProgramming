<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Excercise-6</title>
</head>
<body>
	<?php function remove_all($str,$c){
$str1='';
for($i=0;$i<strlen($str);$i++){
	if($str[$i]!=$c){
	$str1=$str1.$str[$i]; 
	}
}
echo "After removal : ".$str1;
}
$a=$_GET['inputvalue'];
$b=$_GET['inputchar'];
remove_all($a,$b); ?>
</body>
</html>