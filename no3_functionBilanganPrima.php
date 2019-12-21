<?php 
   
 for ($b=1; $b<=40; $b++) { 
   
	$t=0;
	for ($j=1; $j <=$b ; $j++) { 
		if($b % $j == 0 ){
			$t++;
		}
	}
	if ($t==2) {
		echo " ".$b."<br>";
	}
   }


?>