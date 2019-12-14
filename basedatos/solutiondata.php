<?php
if (mysqli_connect("localhost", "root", "usuario") ){
    echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
}
else{
    echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
}
$conexion=mysqli_connect("localhost", "root", "usuario");
?>
<html>
<head>
    <title>Data Access</title>
    <style>
        td{
            border: solid 1px;
        }
        table{
            border: solid 1px;
        }
    </style>
</head>
<body>
<?php
    $db="ejerciciowai";
    $consulta=$_POST["consulta"];
    echo $consulta;
    echo "</br>";
    mysqli_select_db ($conexion, "ejerciciowai");
    if(strlen(strstr($consulta, "insert"))>0){
        $datos = mysqli_query ($conexion, $consulta);
        if($datos){
            echo "Añadido con éxito";
        }
        else{
            echo "Fallo en la consulta, revise bien los campos";
        }
    }
    if(strlen(strstr($consulta, "select"))>0){
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
                    <td>Id Autor</td>
                    <td>Nombre</td>
                    <td>Año</td>
                    <td>Disco</td>
                    <td>Duracion(s)</td>
                </tr>
                    <?php
                        $datos = mysqli_query ($conexion, $consulta);
                        while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                    ?>
                
                <tr align="center">
                    <td><?php echo $fila["idauthor"]; ?></td>
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
                    <td>Id Autor</td>
                    <td>Nombre</td>
                    <td>Año</td>
                    <td>Duracion(capitulos)</td>
                </tr>
                    <?php
                        $datos = mysqli_query ($conexion, $consulta);
                        while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                    ?>
                
                <tr align="center">
                    <td><?php echo $fila["idauthor"]; ?></td>
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
                    <td>Id Autor</td>
                    <td>Nombre</td>
                    <td>Año</td>
                </tr>
                    <?php
                        $datos = mysqli_query ($conexion, $consulta);
                        while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                    ?>
                
                <tr align="center">
                    <td><?php echo $fila["idauthor"]; ?></td>
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
                    <td>Id Autor</td>
                    <td>Nombre</td>
                    <td>Año</td>
                    <td>Duracion(min)</td>
                </tr>
                    <?php
                        $datos = mysqli_query ($conexion, $consulta);
                        while ($fila=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
                    ?>
                <tr align="center">
                    <td><?php echo $fila["idauthor"]; ?></td>
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
    }
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
    if(strlen(strstr($consulta, "update"))>0){
        $datos = mysqli_query ($conexion, $consulta);
        if($datos){
            echo "Se ha modificado con éxito";
        }
        else{
            echo "No se ha modificado, compruebe la consulta";
        }
    }
    if(strlen(strstr($consulta, "delete"))>0){
        mysqli_query($conexion, "SET SQL_SAFE_UPDATES=0;");
        $datos = mysqli_query ($conexion, $consulta);
        if($datos){
            echo "Eliminado con éxito";
        }
        else{
            echo "No se ha podido eliminar, revise la consulta";
        }
    }
    ?>
    <form action="entry.php"><p></br></p><input type="submit" value="Volver"></form>
</body>
</html>