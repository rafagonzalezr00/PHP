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
            echo $_COOKIE["money"]. "</br>";
        ?>
    </p>
    <form action="" method="POST">
        Cuantity to add in your count: <input type="number" name="cantidad">
    </form>
    <form action="actions.php"><button>Submit</button></button>
</body>
</html>