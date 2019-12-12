<?php
    $cadena=$_POST["cadena"];
    function ispangram($cadena){
        $pangram=false;
        $cadena=strtolower($cadena);
        $letras=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        $arraycadena=str_split($cadena);
        foreach($arraycadena as $char){
            if(ctype_alpha($char)){  //vemos si el caracter es apto
                if(ctype_upper($char)){  //comprobamos si es mayuscula
                    $char=strtolower($char);
                }
                $key=array_search($char, $letras);
                if ($key !== false){
                    unset($letras[$key]);
                }
            }
        }
        if(!$letras){
            $pangram=true;
        }
        else{
            $pangram=false;
        }
        return $pangram;
    }
    $solution=ispangram($cadena);
    if($solution=true){
        echo "Es pangram";
    }
    else{
        echo "No es pangram";
    }
?>