<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    //comprobamos si el num1>num2, si no le invertimos los valores
    if($num2<$num1){
        $aux = $num1;
        $num1 = $num2;
        $num2 = $aux;
    }
    function cycle($n){	
        $length = 1;
        while($n != 1){
            if($n%2!=0){
                $n = 3*$n + 1;
            }	
            else{
                $n = $n/2;
            }		
            $length++;
        }
        return $length;
    }
    $i = $num1;
    $max = 1;
    while($i <= $num2){
        $actual = cycle($i);
        if($actual>$max)	$max = $actual;
        $i++;
    }
    echo "$num1 $num2 $max";
?>