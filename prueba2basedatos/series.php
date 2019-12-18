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
                $consulta="describe series;";
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
                $consulta="select a.nameauthor, s.* from authors a join series s on s.idauthor=a.id;";
                echo "<br>";
                echo $consulta;
                echo "<br>";
                echo "<br>";
                ?>
                <table>
                    <tr align="center">
                        <td>Name Author</td>
                        <td>Name Serie</td>
                        <td>Year</td>
                        <td>Duration (chapters)</td>
                    </tr>
                    <?php
                    $datos = mysqli_query ($conexion, $consulta);
                    while($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
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
            if(isset($_REQUEST['update'])){
                ?>
                <form action="" method="POST">
                    <p>Campo que quiere modificar: <input type="text" name="campo"></p>
                    <p>Nuevo valor del campo: <input type="text" name="nuevoval"></p>
                    <p>Nombre de la pelicula que quiere modificar: <input type="text" name="nombre"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $campo=$_POST["campo"];
                $nuevoval=$_POST["nuevoval"];
                $nombre=$_POST["nombre"];
                if($campo==="yearserie" or $campo==="durationserie"){
                    $consulta='update series set ' .$campo. '=' .$nuevoval. ' where nameseries="' .$nombre. '";';
                }
                else{
                    $consulta='update series set ' .$campo. '="' .$nuevoval. '" where nameseries="' .$nombre. '";';
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
                    <p>Id author: <input type="text" name="idau"></p>
                    <p>Year: <input type="number" name="year"></p>
                    <p>Duration: <input type="number" name="durac"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $name=$_POST["name"];
                $idauthor=$_POST["idau"];
                $year=$_POST["year"];
                $duracion=$_POST["durac"];
                $consulta='insert into series(idauthor, nameserie, yearserie, durationserie) values("' .$idauthor. '","' .$name. '",' .$year. ',' .$duracion .');';
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
                $consulta='delete from series where nameserie="' .$name. '";';
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