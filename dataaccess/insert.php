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
            echo "</br>";
            echo "</br>";
            mysqli_select_db ($conexion, "ejerciciowai");
            if(strlen(strstr($tabla, "authors"))>0){
                echo "Insert into " .$tabla;
                ?>
                    <form action="" method="POST">
                        <p>Name: <input type="text" name="name"></p>
                        <p>City: <input type="text" name="city"></p>
                        <p>Age: <input type="text" name="age"></p>
                        <input type="submit" value="Insert">
                    </form>
                <?php
                    $nam=$_POST["name"];
                    $cit=$_POST["city"];
                    $ag=$_POST["age"];
                    $name='"' .$nam. '"';
                    $city='"' .$cit. '"';
                    $age='"' .$ag. '"';
                    $consulta="insert into author(name, city, age) values (" .$name. "," .$city. "," .$age. ");";
                    mysqli_query($conexion, $consulta);
            }
            if(strlen(strstr($tabla, "songs"))>0){
                echo "Insert into " .$tabla;
                ?>
                    <form action="" method="POST">
                        <p>Name: <input type="text" name="name"></p>
                        <p>City: <input type="text" name="city"></p>
                        <p>Age: <input type="text" name="age"></p>
                        <input type="submit" value="Insert">
                    </form>
                <?php
                    $nam=$_POST["name"];
                    $cit=$_POST["city"];
                    $ag=$_POST["age"];
                    $name='"' .$nam. '"';
                    $city='"' .$cit. '"';
                    $age='"' .$ag. '"';
                    $consulta="insert into author(name, city, age) values (" .$name. "," .$city. "," .$age. ");";
                    mysqli_query($conexion, $consulta);
            }
            if(strlen(strstr($tabla, "films"))>0){
                echo "Insert into " .$tabla;
                ?>
                    <form action="" method="POST">
                        <p>Name: <input type="text" name="name"></p>
                        <p>City: <input type="text" name="city"></p>
                        <p>Age: <input type="text" name="age"></p>
                        <input type="submit" value="Insert">
                    </form>
                <?php
                    $nam=$_POST["name"];
                    $cit=$_POST["city"];
                    $ag=$_POST["age"];
                    $name='"' .$nam. '"';
                    $city='"' .$cit. '"';
                    $age='"' .$ag. '"';
                    $consulta="insert into author(name, city, age) values (" .$name. "," .$city. "," .$age. ");";
                    mysqli_query($conexion, $consulta);
            }
            if(strlen(strstr($tabla, "series"))>0){
                echo "Insert into " .$tabla;
                ?>
                    <form action="" method="POST">
                        <p>Name: <input type="text" name="name"></p>
                        <p>City: <input type="text" name="city"></p>
                        <p>Age: <input type="text" name="age"></p>
                        <input type="submit" value="Insert">
                    </form>
                <?php
                    $nam=$_POST["name"];
                    $cit=$_POST["city"];
                    $ag=$_POST["age"];
                    $name='"' .$nam. '"';
                    $city='"' .$cit. '"';
                    $age='"' .$ag. '"';
                    $consulta="insert into author(name, city, age) values (" .$name. "," .$city. "," .$age. ");";
                    mysqli_query($conexion, $consulta);
            }
            if(strlen(strstr($tabla, "images"))>0){
                echo "Insert into " .$tabla;
                ?>
                    <form action="" method="POST">
                        <p>Name: <input type="text" name="name"></p>
                        <p>Idauthor: <input type="number" name="idauthor"></p>
                        <p>Year: <input type="number" name="year"></p>
                        <input type="submit" value="Insert">
                    </form>
                <?php
                    $nam=$_POST["name"];
                    $idaut=$_POST["idauthor"];
                    $year=$_POST["year"];
                    $name='"' .$nam. '"';
                    $consulta="insert into images(nameimage, idauthor, yearimage) values (" .$name. "," .$idaut. "," .$year. ");";
                    mysqli_query($conexion, $consulta);
            }
        ?>
    </body>
</html>