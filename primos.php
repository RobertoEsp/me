<?php

function primos($max) {

	$primos = [1];
	$cont = 1;
	
	
	while($cont < $max){
		$cont++;
		
		foreach($primos as $primo){
			if($primo == 1 || $cont/2 < $primo ){
				continue;
			}
			
			if($cont % $primo == 0){
				continue(2);
			}
			
		}

		$primos[] = $cont;
	}
	
	return $primos;
}

echo(end(primos(1000)));
