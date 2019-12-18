<?php
    session_start();
    #color
    if(isset($_POST['rps1'])){
		$_SESSION['rps1'] = $_POST['rps1'];
    }
    #country
    if(isset($_POST['rps2'])){
		$_SESSION['rps2'] = $_POST['rps2'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rock-Paper-Scissors</title>
        <style>
        img{
            width: 100px;
        }
        </style>
    </head>
    <body>
        <form action="solution.php" method="POST">
            <input type="radio" name="rps2" value="piedra"><img src="piedra.png"></input>
            <input type="radio" name="rps2" value="tijera"><img src="tijera.png"></input>
            <input type="radio" name="rps2" value="papel"><img src="papel.png"></input>
            <br><input type="submit" value="Solution">
        </form>
    </body>
</html>