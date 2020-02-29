
<html>
<head></head>
<body>
<table border="2">
	<tr>
<?php
$firma1 =[];
$firma2 =[];
for($j=0;$j<2;$j++){
	for($i=0;$i<31;$i++){
		$firma1[$j][$i] = rand(1,100);
		$firma2[$j][$i] = rand(1,100);
	}
}
var_dump($firma1,$firma2);
$s1 =0; 
$s2 =0 ; 
for($j=0;$j<2;$j++){
	for($i=0;$i<31;$i++){
		$s1 = $s1 + $firma1[$j][$i];
		$s2 = $s2 + $firma2[$j][$i];
	}
}
var_dump($s1,$s2,$s1+$s2);
 ?>
}
</tr>
</table>
</body>
</html>

