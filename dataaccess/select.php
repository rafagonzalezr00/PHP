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
            <p>Select: </p>
                <input type="radio" name="tabla" value="authors">Authors</input>
                <input type="radio" name="tabla" value="songs">Songs</input>
                <input type="radio" name="tabla" value="series">Series</input>
                <input type="radio" name="tabla" value="images">Images</input>
                <input type="radio" name="tabla" value="films">Films</input><br><br>
                <input type="submit" value="Select">
                <input type="submit" value="Volver" formaction="entry.php">
        </form>
        <?php
            $conexion=mysqli_connect("localhost", "root", "usuario");
            $tabla=$_POST["tabla"];
            $consulta="select * from " .$tabla;
            echo "</br>";
            echo "</br>";
            echo $consulta;
            echo "</br>";
            mysqli_select_db ($conexion, "ejerciciowai");
            if(strlen(strstr($consulta, "authors"))>0){
                ?>
                <table>
                    <tr align="center">
                        <td>Nombre</td>
                        <td>Ciudad</td>
                        <td>Edad</td>
                    </tr>
                        <?php
                            $datos = mysqli_query ($conexion, $consulta);
                            while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                        ?>
                    
                    <tr align="center">
                        <td><?php echo $fila["nameauthor"]; ?></td>
                        <td><?php echo $fila["city"]; ?></td>
                        <td><?php echo $fila["age"]; ?></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
                <?php
            }
            if(strlen(strstr($consulta, "songs"))>0){
                ?>
                <table>
                    <tr align="center">
                        <td>Name Autor</td>
                        <td>Nombre</td>
                        <td>Año</td>
                        <td>Disco</td>
                        <td>Duracion(s)</td>
                    </tr>
                        <?php
                            $consulta="select a.nameauthor, s.* from authors a join songs s on s.idauthor=a.id;";
                            $datos = mysqli_query ($conexion, $consulta);
                            while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                        ?>
                    
                    <tr align="center">
                        <td><?php echo $fila["nameauthor"]; ?></td>
                        <td><?php echo $fila["namesong"]; ?></td>
                        <td><?php echo $fila["yearsong"]; ?></td>
                        <td><?php echo $fila["disc"]; ?></td>
                        <td><?php echo $fila["durationsong"]; ?></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
                <?php
            }
            if(strlen(strstr($consulta, "series"))>0){
                ?>
                <table>
                    <tr align="center">
                        <td>Name Autor</td>
                        <td>Nombre</td>
                        <td>Año</td>
                        <td>Duracion(capitulos)</td>
                    </tr>
                        <?php
                            $consulta="select a.nameauthor, s.* from authors a join series s on s.idauthor=a.id;";
                            $datos = mysqli_query ($conexion, $consulta);
                            while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                        ?>
                    
                    <tr align="center">
                        <td><?php echo $fila["nameauthor"]; ?></td>
                        <td><?php echo $fila["nameseries"]; ?></td>
                        <td><?php echo $fila["yearserie"]; ?></td>
                        <td><?php echo $fila["durationserie"]; ?></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
                <?php
            }
            if(strlen(strstr($consulta, "images"))>0){
                ?>
                <table>
                    <tr align="center">
                        <td>Name Author</td>
                        <td>Nombre</td>
                        <td>Año</td>
                    </tr>
                        <?php
                            $consulta="select a.nameauthor, i.* from authors a join images i on i.idauthor=a.id;";
                            $datos = mysqli_query ($conexion, $consulta);
                            while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                        ?>
                    
                    <tr align="center">
                        <td><?php echo $fila["nameauthor"]; ?></td>
                        <td><?php echo $fila["nameimage"]; ?></td>
                        <td><?php echo $fila["yearimage"]; ?></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
                <?php
            }
            if(strlen(strstr($consulta, "films"))>0){
                ?>
                <table>
                    <tr align="center">
                        <td>Name Autor</td>
                        <td>Nombre</td>
                        <td>Año</td>
                        <td>Duracion(min)</td>
                    </tr>
                        <?php
                            $consulta="select a.nameauthor, f.* from authors a join films f on f.idauthor=a.id;";
                            $datos = mysqli_query ($conexion, $consulta);
                            while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                        ?>
                    <tr align="center">
                        <td><?php echo $fila["nameauthor"]; ?></td>
                        <td><?php echo $fila["namefilm"]; ?></td>
                        <td><?php echo $fila["yearfilm"]; ?></td>
                        <td><?php echo $fila["durationfilm"]; ?></td>
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