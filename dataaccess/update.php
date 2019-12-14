<!DOCTYPE html>
<html>
    <head>
        <title>Describe page</title>
        <style>
            table{
                border: solid 1px black;
            }
            td{
                border: solid 1px black;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <p>Describe: </p>
                <input type="radio" name="tabla" value="authors">Authors</input>
                <input type="radio" name="tabla" value="songs">Songs</input>
                <input type="radio" name="tabla" value="series">Series</input>
                <input type="radio" name="tabla" value="images">Images</input>
                <input type="radio" name="tabla" value="films">Films</input><br><br>
                <p><input type="submit" value="Update">
                <input type="submit" value="Volver" formaction="entry.php"></p>
        </form>
        <?php
            $conexion=mysqli_connect("localhost", "root", "usuario");
            $db="ejerciciowai";
            $tabla=$_POST["tabla"];
            echo "</br>";
            echo "</br>";
            mysqli_select_db ($conexion, "ejerciciowai");
            if($tabla=="authors")
            {
                $authors = mysqli_query ($conexion, "select * from authors;");
                while ($fila=mysqli_fetch_array($authors, MYSQLI_ASSOC)){
                    echo $fila["nameauthor"];
                    echo "<br>";
                }
                ?>
                <form action="" method="POST">
                    <p>Autor que quieres modificar que esté en la lista: <input type="text" name="nombre"></p>
                    <p>Campo que quieres modificar:
                        <input type="radio" name="campo" value="nameauthor">Nameauthor</input>
                        <input type="radio" name="campo" value="city">City</input>
                        <input type="radio" name="campo" value="age">Age</input>
                    </p>
                    <p>Nuevo valor del campo: <input type="text" name="nuevovalor"></p>
                    <input type="submit">
                </form>
                <?php
                    $nombre=$_POST["nombre"];
                    $campo=$_POST["campo"];
                    $nuevoval=$_POST["nuevovalor"];/* 
                    $consulta="update authors set " .$campo. "="" .$nuevoval. ""where nameauhtor="" .$nombre. """; */
                    echo $consulta;
                    $datos = mysqli_query ($conexion, $consulta);
                    if($datos){
                        echo "Se ha modificado con éxito";
                    }
                    else{
                        echo "No se ha modificado, compruebe la consulta";
                    }
            }
        ?>
    </body>
</html>