<?php
    $n1=$_POST["numero1"];
    $n2=$_POST["numero2"];
    $n3=$_POST["numero3"];
    $n4=$_POST["numero4"];
    $n5=$_POST["numero5"];
    $numeros=array($n1, $n2, $n3, $n4, $n5);
    $i=0;
    $j=0;
    $menor=$numeros[$i];
    $mayor=$numeros[$i];
    while($i<4)
    {
        if($menor>=$numeros[$i])
        {
            $menor=$numeros[$i];
        }
        $i++;
    }
    while($j<=4)
    {
        if($mayor<$numeros[$j])
        {
            $mayor=$numeros[$j];
        }
        $j++;
    }
    echo "The maximun value: " .$mayor. ", the smallest: " .$menor;
?>