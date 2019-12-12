<!DOCTYPE html>
<?php
    //number of access 
    session_start(); //start all sessions
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
            #formu{
                margin-left: -80px;
                margin-top: 150px;
                text-align: center;
            }
            #tabla{
                margin-left: 610px;
            }
        </style>
    </head>
    <body>
        <form action=""method="post" enctype="multipart/form-data" id="formu">
            <h1>Register of data</h1>
            <p>Please, write your name <input type="text" name="my_name"></p>
            <p>Upload your image <input type="file" name="my_photo" accept=".jpg, .png, .jpeg"></p>
            <p>Write your favourite color <input type="text" name="my_colour"></p>
            <p>Write your country <input type="text" name="my_country"></p>
            <table id="tabla">
                <tr>
                    <td id="botcol">
                        <input type="submit" formaction="second.php" value="Colour" id="colorbot">
                    </td>
                    <td id="vec">
                        <p>
                            <?php
                                print($_SESSION["count"]);
                                print(" veces");
                            ?>
                        </p>
                    </td>
                    <td id="botcou">
                        <input type="submit" formaction="third.php" value="Country" id="countrybot">
                    </td>      
                </tr>
            </table>
        </form>
    </body>
</html>