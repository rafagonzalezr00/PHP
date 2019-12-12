<?php
    session_start();
    if (isset($_POST["name"])){
        setcookie("name", $_POST["name"], time() + 84600 * 31);
    }
    if (isset($_POST["money"])){
        setcookie("money", $_POST["money"], time() + 84600 * 31);
    }
?>
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
            echo $_COOKIE["money"]. " €</br>";
        ?>
    </p>
    <form action="">
        Destination Account: <input type="text">
    </form>
    <form action="actions.php" method="POST">
        Cuantity: <input type="number" name="cantitrans"></br>
        <input type="submit" value="Submit" name="ingresar_funcion_transferencia">
    </form>
</body>
</html>