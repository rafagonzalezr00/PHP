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
                <input type="submit" value="Describe">
                <input type="submit" value="Volver" formaction="entry.php">
        </form>
        <?php
            $conexion=mysqli_connect("localhost", "root", "usuario");
            $db="ejerciciowai";
            $tabla=$_POST["tabla"];
            $consulta="describe " .$tabla;
            echo "</br>";
            echo "</br>";
            echo $consulta;
            echo "</br>";
            
            mysqli_select_db ($conexion, "ejerciciowai");
            if(strlen(strstr($consulta, "describe"))>0){
                ?>
            <table>
                <tr align="center">
                    <td>Field</td>
                    <td>Type</td>
                    <td>Null</td>
                    <td>Key</td>
                    <td>Default</td>
                    <td>Extra</td>
                </tr>
                <?php
                $datos = mysqli_query ($conexion, $consulta);
                while($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                    ?>
                        <tr align="center">
                            <td><?php echo $fila["Field"]; ?></td>
                            <td><?php echo $fila["Type"]; ?></td>
                            <td><?php echo $fila["Null"]; ?></td>
                            <td><?php echo $fila["Key"]; ?></td>
                            <td><?php echo $fila["Default"]; ?></td>
                            <td><?php echo $fila["Extra"]; ?></td>
                            <?php
                                }
                            ?>
                        </tr>
                    </table>
                    <?php
                }
        ?>
    </body>
</html>