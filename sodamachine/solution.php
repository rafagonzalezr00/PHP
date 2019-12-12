<?php
    $product=$_POST["product"];
    $dinero=$_POST["money"];
    switch($product){
        case "coke":
            $dinero=$dinero-1.5;
            break;
        case "water":
            $dinero=$dinero-1;
            break;
        case "beer":
            $dinero=$dinero-1.5;
            break;
    }
    echo "You bought a ". $product. ", your change is " .$dinero. "€";
?>