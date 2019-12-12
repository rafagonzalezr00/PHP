<!DOCTYPE html>
<?php
//number of access 
session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
} else {
    $_SESSION["count"]++;
}
?>
<html>
    <head>
        <title>Sessions and Cookies in PHP</title>
        <style>
            #botoms{
                margin-top: 350px;
            }
            #indata{
                margin-left: 40px;
            }
            #incolor{
                margin-left: 460px;
            }
            #cont{
                margin-left: 500px;
            }
        </style>
    </head>
    <body>
        <h1>Datas > Your country</h1>
        <p>
            <?php
                echo "Name: " . $_COOKIE["Name"] . "</br>";
                echo "Colour: " . $_SESSION['country'];
            ?>
        </p>
        <table id="botoms">
            <tr>
                <td>
                    <form action="entry.php" id="indata"><input type="submit" value="Data" ></form>
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
                    <form action="colour.php" id="incolor"><input type="submit" value="Colour"></form>
                </td>
            </tr>
        </table>
    </body>
</html>