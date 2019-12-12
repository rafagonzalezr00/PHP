<?php
    
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
            echo $_COOKIE["money"]. "</br>";
        ?>
    </p>
    <p>
        <?php
            echo "Cuenta destino: " .$_SESSION["cuentadest"]. " Cantidad: " .$_SESSION["cantidad"]        
        ?>
    </p>
</body>
</html>