<?php
    session_start();
    #player 1
    if(isset($_POST['rps1'])){
		$_SESSION['rps1'] = $_POST['rps1'];
    }
    #player 2
    if(isset($_POST['rps2'])){
		$_SESSION['rps2'] = $_POST['rps2'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Solution Rock-Paper-Scissors</title>
        <style>
            img{
                width: 100px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <h3>And the winner is:</h3>
        <?php
            $player1=$_SESSION['rps1'];
            $player2=$_SESSION['rps2'];
            echo "El jugador 1 ha sacado: " .$player1. "<br>";
            echo "El juagdor 2 ha sacado: " .$player2. ", por lo que: <br>";
            if($player1===$player2) {$winner="Ha habido un empate, a repetir!!";}
            else if($player1==="piedra"){
                if($player2==="tijera") {$winner="Jugador 1 con piedra gana sobre las tijeras";}
                else {$winner="Jugador 2 con papel gana sobre la piedra";}
            }
            else if($player1==="papel"){
                if($player2==="tijera") {$winner="Jugador 2 con tijeras gana sobre el papel";}
                else {$winner="Jugador 1 con papel gana sobre la piedra";}
            }
            else if($player1==="tijera"){
                if($player2==="piedra") {$winner="Jugador 2 con piedra gana sobre las tijeras";}
                else {$winner="Jugador 1 con tijera gana sobre la papel";}
            }
            echo $winner;
        ?>
        <h3>Rules: </h3>
        <p>
            <img src="papel.png">
            <img src="mayor.jpg">
            <img src="piedra.png">
            <img src="separa.jpg">
            <img src="piedra.png">
            <img src="mayor.jpg">
            <img src="tijera.png">
            <img src="separa.jpg">
            <img src="tijera.png">
            <img src="mayor.jpg">
            <img src="papel.png">
        </p>
    </body>
</html>