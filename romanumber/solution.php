<!DOCTYPE html>
<html>
<body>
        <h1>Roman Numbers</h1>
        <?php
            $romano=$_POST["romano"];
		    $arabe=$_POST["arabe"];
            $aTot="";
            $rTot=0;
            $r=$romano;
            $a=$arabe;
            while ($a>0){
                if($a/1000>1){
                    $a=$a-1000;
                    $aTot .= "M"; 
                }
                if($a/500>1){
                    $a=$a-500;
                    $aTot .= "D"; 
                }
                if($a/100>1){
                    $a=$a-100;
                    $aTot .= "C"; 
                }
                if($a/50>1){
                    $a=$a-50;
                    $aTot .= "L"; 
                }
                if($a/10>1){
                    $a=$a-10;
                    $aTot .= "X"; 
                }
                if($a/5>1){
                    $a=$a-5;
                    $aTot .= "V"; 
                }
                if($a>=1){
                    $a=$a-1;
                    $aTot .= "I"; 
                }
            }
            while ($r!==""){
                $rest = $r[0];
                if($rest==="M"){
                    $rTot=$rTot+1000;			
                }
                elseif($rest==="D"){
                    $rTot=$rTot+500;			
                }
                elseif($rest==="C"){
                    $rTot=$rTot+100;			
                }
                elseif($rest==="L"){
                    $rTot=$rTot+50;			
                }
                elseif($rest==="X"){
                    $rTot=$rTot+10;			
                }
                elseif($rest==="V"){
                    $rTot=$rTot+5;			
                }
                elseif($rest==="I"){
                    $rTot=$rTot+1;			
                }
                $r=substr($r,1);
            }
            if($arabe>0){
                        echo "Your arabic number is: ".$arabe.". Or in roman numbers ".$aTot."<br>";
            }
            if($romano!==""){
                        echo "Your roman number is: ".$romano.". Or in arabic numbers ".$rTot;
            }
        ?>
</body>
</html>