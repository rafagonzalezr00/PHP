<?php
    if (isset($_POST["name"])){
        setcookie("name", $_POST["name"], time() + 84600 * 31);
    }
    if (isset($_POST["money"])){
            setcookie("money", $_POST["money"], time() + 84600 * 31);
    }
        $sumaingre=$_POST["cantidad"];
        $retira=$_POST["cantidadret"];
        $transfere=$_POST["cantitrans"];
        $dinero= $_COOKIE["money"];
        if (isset($_POST["ingresar_funcion"])){
            account::ingresar($dinero, $sumaingre);
        }
        if (isset($_POST["ingresar_funcion_restar"])){
            account::retirar($dinero, $retira);
        }
        if (isset($_POST["ingresar_funcion_transferencia"])){
            account::transferencia($dinero, $transfere);
        }
        class account{
            public static function actualizar($nuevodin){
                setcookie("money", $nuevodin, time() + 84600 * 31);
                return;
            }
            public static function ingresar($dinero, $sumaingre){
                $nuevodin=$dinero+$sumaingre;
                account::actualizar($nuevodin);
                return $nuevodin;
                $nuevodin=0;
            }
            public static function retirar($dinero, $retira){
                $nuevodin=$dinero-$retira;
                account::actualizar($nuevodin);
                return $nuevodin;
                $nuevodin=0;
            }
            public static function transferencia($dinero, $transfere){
                $nuevodin=$dinero-$transfere;
                account::actualizar($nuevodin);
                return $nuevodin;
            }
            public static function balance($dinero, $sumaingre, $transfere, $retira){
                $cadena="El dinero que tenias al principio era: ".$dinero."€. Has ingresado: ".$sumaingre."€. Has retirado: ".$retira.
                "€. Y has transferido: ".$transfere;
                return $cadena;
            }
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accounts PHP</title>
</head>
<body>
    <h1>Actions</h1>
    <p>Your acount:
        <?php
            echo $_COOKIE["name"]. "</br>";
        ?>
    </p>
    <p>Your money:
        <?php
            echo $_COOKIE["money"]. " €</br>";
        ?>
    </p>
    <form action="ingresar.php"><button>Ingresar</button></form>
    <form action="retirar.php"><button>Retirar</button></form>
    <form action="transferencia.php"><button>Transferencia</button></form>
    <form action="history.php"><button>Balance</button></form>
    <?php
        
    ?>
</body>
</html>