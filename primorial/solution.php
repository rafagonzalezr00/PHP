
<?php
	$num = $_POST["primorial"];	

	function is_prime($num){
		$i = 2;
		$is_prime = true;

		while($is_prime && $i<$num/2){
			if($num%$i == 0)
				$is_prime = false;
			
			$i++;
		}
		return $is_prime;
	}	

	function primorial($num){
		$i = 2;
		$total = 1;
		while($i <= $num){
			if(is_prime($i))
				$total = $total * $i; 
				// $total*=$i;
			$i++;
		}
		return $total;
	}

	echo "Your number was: ".$num." and
			its primorial is: ".primorial($num);
?>
primorial.php
