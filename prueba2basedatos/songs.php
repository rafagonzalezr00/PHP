<?php
    $conexion=mysqli_connect("localhost", "root", "usuario");
    mysqli_select_db ($conexion, "ejerciciowai");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Authors table</title>
        <style>
            body{
                text-align: center;
                margin-top: 10%;
            }
            table{
                border: solid 1px;
            }
            td{
                border: solid 1px;
            }
        </style>
    </head>
    <body>
        <form action="" method="REQUEST">
            <input type="submit"  value="Describe" name="describe" title="Describe the table">
            <input type="submit" value="Select" name="select" title="Search all register of the table">
            <input type="submit" value="Update" name="update" title="Update a register of the table">
            <input type="submit" value="Insert" name="insert" title="Insert a register of the table">
            <input type="submit" value="Delete" name="delete" title="Delete a register of the table">
            <input type="submit" value="Home" title="Change the table" formaction="entry.php">
        </form>
        <?php
            if(isset($_REQUEST['describe'])){
                $consulta="describe songs;";
                echo "<br>";
                echo $consulta;
                echo "<br>";
                echo "<br>";
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
            if(isset($_REQUEST['select'])){
                $consulta="select a.nameauthor, s.* from authors a join songs s on s.idauthor=a.id;";
                echo "<br>";
                echo $consulta;
                echo "<br>";
                echo "<br>";
                ?>
                <table>
                    <tr align="center">
                        <td>Name Author</td>
                        <td>Name Song</td>
                        <td>Disc</td>
                        <td>Year</td>
                        <td>Duration (s)</td>
                    </tr>
                    <?php
                    $datos = mysqli_query ($conexion, $consulta);
                    while($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                        ?>
                    <tr align="center">
                        <td><?php echo $fila["nameauthor"]; ?></td>
                        <td><?php echo $fila["namesong"]; ?></td>
                        <td><?php echo $fila["disc"]; ?></td>
                        <td><?php echo $fila["yearsong"]; ?></td>
                        <td><?php echo $fila["durationsong"]; ?></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
                <?php
            }
            if(isset($_REQUEST['update'])){
                ?>
                <form action="" method="POST">
                    <p>Campo que quiere modificar: <input type="text" name="campo"></p>
                    <p>Nuevo valor del campo: <input type="text" name="nuevoval"></p>
                    <p>Nombre del autor que quiere modificar: <input type="text" name="nombre"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $campo=$_POST["campo"];
                $nuevoval=$_POST["nuevoval"];
                $nombre=$_POST["nombre"];
                if($campo==="yearsong" or $campo==="durationsong"){
                    $consulta='update songs set ' .$campo. '=' .$nuevoval. ' where namesong="' .$nombre. '";';
                }
                else{
                    $consulta='update songs set ' .$campo. '="' .$nuevoval. '" where namesong="' .$nombre. '";';
                }
                echo $consulta;
                $datos = mysqli_query ($conexion, $consulta);
                if($datos){
                    echo "Modificado con exito";
                }
                else{
                    echo "No se ha modificado nada";
                }
            }
            if(isset($_REQUEST['insert'])){
                ?>
                <form action="" method="POST">
                    <p>Name: <input type="text" name="name"></p>
                    <p>Id Author: <input type="number" name="idau"></p>
                    <p>Disc: <input type="text" name="disc"></p>
                    <p>Year: <input type="number" name="year"></p>
                    <p>Duration(s): <input type="number" name="durat"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $name=$_POST["name"];
                $idauthor=$_POST["idau"];
                $year=$_POST["year"];
                $disc=$_POST["disc"];
                $duration=$_POST["durat"];
                $consulta='insert into songs(namesong, disc, yearsong, durationsong, idauthor) values("' .$name. '","' .$disc. '",' .$year. ',' .$duration. ',' .$idauthor. ');';
                $datos = mysqli_query ($conexion, $consulta);
                if($datos){
                    echo "Añadido con exito";
                }
                else{
                    echo "No se ha añadido nada";
                }
            }
            if(isset($_REQUEST['delete'])){
                ?>
                <form action="" method="POST">
                    <p>Name: <input type="text" name="name"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $name=$_POST["name"];
                $consulta='delete from songs where namesong="' .$name. '";';
                mysqli_query($conexion, "SET SQL_SAFE_UPDATES=0;");
                $datos = mysqli_query ($conexion, $consulta);
                if($datos){
                    echo "Eliminado con éxito";
                }
                else{
                    echo "No se ha podido eliminar, revise que el nombre existe";
                }
            }
        ?>
    </body>
</html>