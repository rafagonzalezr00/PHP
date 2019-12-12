<?php 

    #iniciamos la sesion
    session_start(); 

    #Transportamos las variables de la página 1 a la página actual
    setcookie("nombre", $_POST["name"], time() + 84600 * 31);
    $_SESSION['province'] = $_POST["province"];

    #Inicializamos el contador de las visitas
    if (!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
    } else {
        $_SESSION["count"]++;
    }

    #Guardamos la ruta de la imagen y volvemos a guardar la imagen desde la variable $_FILES a la $fichero y tambíen la guardamos en $_SESSION['imagen']
    $ruta='/opt/lampp/htdocs/ejercicios_inpin/images';
	$fichero=$ruta.basename($_FILES['foto_perfil']['name']);
	move_uploaded_file($_FILES['foto_perfil']['tmp_name'],$fichero);
	$_SESSION['imagen']=$fichero;
?>
<html>
    <head></head>
    <body>
        <h1>Bienvenido a la Tercera Página</h1>
        <?php
           echo " Nombre: " . $_COOKIE["nombre"] . "<br>";
           echo " Provincia: " . $_SESSION['province'] . "<br>";
           echo "<br>";
           echo "<img src='".$_SESSION['imagen']."'/>";
        ?>
        <table>
            <tr>
                <br></br>
                <td>
                    <form action="primera_pagina.php">
                        <input type="submit" value=" Página 1 ">
                    </form>
                </td>
                <td>
                    <form action="segunda_pagina.php">
                        <input type="submit" value=" Página 2 ">
                    </form>
                </td>
            </tr>
        </table>
        <?php
            print("Número de Visitas a la Web :  ");
            print($_SESSION["count"]);
            print(" visitas.");
        ?>
    </body>
</html>