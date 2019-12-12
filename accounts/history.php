<!DOCTYPE html>
<html>
<head>
    <title>Accounts</title>
</head>
<body>
    <p>Your acount:
        <?php
            echo $_COOKIE["name"]. "</br>";
        ?>
    </p>
    <p>Your money:
        <?php
            echo $_COOKIE["money"]. "</br>";
        ?>
    </p>
    <p>
        <?php
            $sumaingre=$_POST["cantidad"];
            $retira=$_POST["cantidadret"];
            $transfere=$_POST["cantitrans"];
            $dinero= $_COOKIE["money"];
            class account{
                public static function balance($dinero, $sumaingre, $transfere, $retira){
                    $cadena="El dinero que tenias al principio era: ".$dinero."€. Has ingresado: ".$sumaingre."€. Has retirado: ".$retira.
                    "€. Y has transferido: ".$transfere;
                    return $cadena;
                }
            }
            account::balance($dinero, $sumaingre, $transfere, $retira);       
        ?>
    </p>
    <form action="actions.php"><input type="submit" value="Back"></form>
</body>
</html>