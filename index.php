
<html>
<head></head>
<body>

<?php
function buyBread($money=10,$discount=0){
	$price = 10 ;
	$price = 10 - (10*$discount/100);
 	return $money-$price;
}



$x = buyBread();
$x = buyBread(50);
$x = buyBread('',3);
$x = buyBread(50,3);
echo $x;
//----------------------------
for ($i=0; $i<12; $i++){	
	$a[$i] = rand (1,10);
	$b[$i] = rand (1,10);
}
		
	var_dump($a, $b);
	$m=[];
		for ($i=0; $i<12; $i++){
			for ($j=0; $j<12; $j++){
				 echo $a[$i][$j]**2*$b[$i][$j];
			}
		}
 ?>

</body>
</html>

