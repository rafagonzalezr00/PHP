<?php
    $n=$_POST["numero"];
    $c=0;
    while ($n>0){
        $c++;
        echo str_repeat ("&nbsp&nbsp",$n).str_repeat ("*",$c)."<br>";
        $c++;
        $n--;
    }
?>