<!DOCTYPE html>

    <?php 

        #Iniciamos la sesion
        session_start(); 

        #Guardamos las variables de la página 1 en variables para usarlas en esta página

        if (isset($_POST["name"])){
            setcookie("nombre", $_POST["name"], time() + 84600 * 31);
        }

        if (isset($_POST['color'])){
            $_SESSION['color'] = $_POST['color'];
        }


        
        
        #Inicializamos el contador de las visitas
        if (!isset($_SESSION["count"])) {
            $_SESSION["count"] = 0;
        } else {
            $_SESSION["count"]++;
        }

        if (isset($_FILES['foto_perfil']['name'])){
            #Ponemos la ruta de donde se han almacenado la imagen
            $ruta='images/';
        
            #Guardamos la imagen en la variable fichero
            $fichero=$ruta.basename($_FILES['foto_perfil']['name']);
            
            #movemos los archivos subidos de la variable $_FILES a la variable $fichero y a su vez la guardamos en la variable $_SESSION['imagen]
            move_uploaded_file($_FILES['foto_perfil']['tmp_name'],$fichero);
            $_SESSION['imagen']=$fichero;
        
        }

    ?>
    <html>
        <head></head>
        <body>
            <h1> Bienvenido a la Segunda Página </h1>
            <p>

                <?php
                    echo " Nombre : " . $_COOKIE["nombre"] . "<br>";
                    echo " Color favorito : " . $_SESSION['color'] . "<br>";
                    echo "<br>";
                    echo "<img src='".$_SESSION['imagen']."'/>";
                    
                ?>
            </p>

            <table>
                <tr>
                    <br></br>
                    <td>
                        <form action="primera_pagina.php">
                            <input type="submit" value=" Página 1 ">
                        </form>
                    </td>
                    <td>
                        <form action="tercera_pagina.php">
                            <input type="submit" value=" Página 3 ">
                        </form>
                    </td>
                </tr>
            </table>

            <p>
                <?php
                    print("Número de Visitas a la Web : ");
                    print($_SESSION["count"]);
                    print(" visitas.");
                    ?>
                    
            </p>

        </body>
    </html>
