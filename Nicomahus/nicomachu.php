<?php
        $num = $_POST["numero"];
	$suma=0;
	$totsal=1;
	$cubo=0;
	for($i=0;$i<$num;$i++)
	{
		$suma=$suma+$i;
	}
	while($suma>0)
	{
		$totsal=$totsal+2;
		$suma--;
	}
	while($num>0)
	{
		$totsal=$totsal+2;
		$cubo=$cubo+$totsal;
		$num--;
	}
	echo "El cubo de su número calculado por Nicomahus es: " .$cubo;
?>