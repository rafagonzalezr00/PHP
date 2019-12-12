<!DOCTYPE html>
<?php
    $cookie_name=$_POST['my_name']; //cookies that save the name
        setcookie("Name", $cookie_name, time() + 84600*31);
    //number of access 
    session_start(); //start all sessions
    $session_colour=$_POST['my_colour']; //session that save the color
    $session_country=$_POST['my_country']; //session that save the country
    $session_photo=$_FILES['my_photo'];
    $_SESSION['colour']=$session_colour;
    $_SESSION['country']=$session_country;
    $_SESSION['image']=$session_photo;
    if (!isset($_SESSION["count"])) {  
        $_SESSION["count"] = 0;
    } else {
        $_SESSION["count"]++;
    } //session that save the number of access
    
?>
<html>
    <head>
        <title>Sessions and Cookies in PHP</title>
        <meta charset="utf-8" />
        <style>
            #botoms{
                margin-top: 200px;
            }
            #incolor{
                margin-left: 40px;
            }
            #incount{
                margin-left: 460px;
            }
            #cont{
                margin-left: 500px;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <h1>Register of data</h1>
            <p>Please, write your name <input type="text" name="my_name"></p>
            <p>Upload your image <input type="file" name="my_photo" accept=".jpg,.jpeg,.bmp,.png"></p>
            <p>Write your favourite color <input type="text" name="my_colour"></p>
            <p>Write your country <input type="text" name="my_country"></p>
            <input type="submit">
        </form>
        <table id="botoms">
            <tr>
                <td>
                    <form action="colour.php" id="incolor"><input type="submit" value="Colour" ></form>
                </td>
                <td>
                    <p id="cont">
                        <?php
                            print($_SESSION["count"]);
                            print(" veces");
                        ?>
                    </p>
                </td>
                <td>
                    <form action="country.php" id="incount"><input type="submit" value="Country"></form>
                </td>
            </tr>
        </table>
    </body>
</html>

<!-- 
<?php
//contador del número de accesos a una página por sesión.
session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
} else {
    $_SESSION["count"]++;
}
?>

<html>
<head>
  <title>Contador de accesos</title>
</head>
<body>
<p>

<?php
print("Hola, has accedido a esta página ");
print($_SESSION["count"]);
print(" veces.");
?>

</p>
</body>
</html>
-->
