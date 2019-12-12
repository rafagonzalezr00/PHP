<?php

    # Aquí iniciamos todas las sesiones que vamos a utilizar
    session_start(); 
    
    # Ahora creamos el código del contador de visitas a la página web
    if (!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
    } else {
        $_SESSION["count"]++;
    }
?>

<html>
    <head>
    
        <title> Session And Cookies</title>
    
    </head>

    <body>

        <h1> Bienvenidos a la Primera Página </h1>

        <form action="" method="post" enctype="multipart/form-data">
            <br></br>
            <a>Nombre :  </a><input type="text" name="name"><br>
            <a>Imagen de Perfil : </a>
            <input type="file" name="foto_perfil" />
            <input type="submit" value=" Subir Imagen " accept=".jpg , .png , .JPG , .PNG" /><br>
            <a>Color favorito : </a> <input type="text" name="color"><br>
            <a>Provincia : </a><input type="text" name="province"><br>
            <br></br>
            <input type="submit" formaction="segunda_pagina.php" value=" Página 2 ">
            <input type="submit" formaction="tercera_pagina.php" value=" Página 3 ">
        </form>

        <?php

            # Aqui imprimimos por pantalla el número de visitas a nuestra página web
            print(" Número de Visitas a la Web :   ");
            print($_SESSION["count"]);
            print(" visitas.");
        ?>

    </body>

</html>
