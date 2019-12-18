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
                $consulta="describe images;";
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
                $consulta="select a.nameauthor, i.* from authors a join images i on i.idauthor=a.id;";
                echo "<br>";
                echo $consulta;
                echo "<br>";
                echo "<br>";
                ?>
                <table>
                    <tr align="center">
                        <td>Name Author</td>
                        <td>Name Image</td>
                        <td>Year</td>
                    </tr>
                    <?php
                    $datos = mysqli_query ($conexion, $consulta);
                    while($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
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
            if(isset($_REQUEST['update'])){
                ?>
                <form action="" method="POST">
                    <p>Campo que quiere modificar: <input type="text" name="campo"></p>
                    <p>Nuevo valor del campo: <input type="text" name="nuevoval"></p>
                    <p>Nombre del cuadro que quiere modificar: <input type="text" name="nombre"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $campo=$_POST["campo"];
                $nuevoval=$_POST["nuevoval"];
                $nombre=$_POST["nombre"];
                if($campo==="yearimage"){
                    $consulta='update images set ' .$campo. '=' .$nuevoval. ' where nameimage="' .$nombre. '";';
                }
                else{
                    $consulta='update images set ' .$campo. '="' .$nuevoval. '" where nameimage="' .$nombre. '";';
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
                    <p>Id Author: <input type="text" name="id"></p>
                    <p>Year: <input type="number" name="age"></p>
                    <input type="submit" value="Submit">
                </form>
                <?php
                $name=$_POST["name"];
                $id=$_POST["id"];
                $year=$_POST["age"];
                $consulta='insert into images(idauthor, nameimage, yearimage) values("' .$id. '","' .$name. '",' .$year. ');';
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
                $consulta='delete from images where nameimage="' .$name. '";';
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