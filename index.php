
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

 ?>

</body>
</html>

