<?php
	$a = 0;
	$sum = 0;
	$sum1 = 0;
	while($a <=100){
		if($a==50){
			break;
		}	
		$sum += $a;
		$sum1 += pow($a, 2);
		$a++;
		echo "$a = $sum"."<br>";
		echo "$a ^ 2 = $sum1"."<br>";
	}
?>