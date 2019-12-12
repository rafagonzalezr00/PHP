<?php
    session_start();
    if (isset($_POST["name"])){
        setcookie("name", $_POST["name"], time() + 84600 * 31);
    }
    if (isset($_POST["money"])){
        setcookie("money", $_POST["money"], time() + 84600 * 31);
    }
    $sumaingre=$_POST["cantidad"];
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
            $dinero= $_COOKIE["money"];
        ?>
    </p>
    <form action="ingresar.php"><button>Ingresar</button></form>
    <form action="retirar.php"><button>Retirar</button></form>
    <form action="transferencia.php"><button>Transferencia</button></form>
    <form action="history.php"><button>Balance</button></form>
    <?php
        class account{
            public static function ingresar($dinero, $cantidad){
                $nuevodin=$dinero+$cantidad;
                return $nuevodin;
            }
            public static function retirar($dinero, $cantidad){
                $nuevodin=$dinero+$cantidad;
                return $nuevodin;
            }
            public static function transferencia($dinero, $cantidad){
                $nuevodin=$dinero+$cantidad;
                return $nuevodin;
            }
            public static function balance($dinero, $cantidad){
                $nuevodin=$dinero+$cantidad;
                return $nuevodin;
            }
        }
    ?>
</body>
</html>