<!DOCTYPE html>
<?php
    session_start();
    #name
    if (isset($_POST["my_name"])){
        setcookie("name", $_POST["my_name"], time() + 84600 * 31);
    }
    #number of access 
    if (!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
    } else {
        $_SESSION["count"]++;
    }
    #color
    if(isset($_POST['my_colour'])){
		$_SESSION['my_colour'] = $_POST['my_colour'];
    }
    #country
    if(isset($_POST['my_country'])){
		$_SESSION['my_country'] = $_POST['my_country'];
    }
    #photo
    if(isset($_FILES['my_photo']['name'])){
        $foto='images/';
	    $directivo=$foto.basename($_FILES['my_photo']['name']);
        move_uploaded_file($_FILES['my_photo']['tmp_name'],$directivo);
        $_SESSION['photo']=$directivo;
    }
?>
<html>
    <head>
        <title>Sessions and Cookies in PHP</title>  
        <style>
            body{
                text-align: center;
            }
            #botons{
                margin-left: 560px;;
            }
        </style>
    </head>
    <body>
        <h1>Datas > Your colour</h1>
        <p>
            <h3>Your Name: 
                <?php
                    echo "" . $_COOKIE["name"] . "</br>";
                ?>
            </h3>
            <?php
                echo "<img src='".$_SESSION['photo']."' id='photo' width='250' height='200'/>";
            ?>
        </p>
        <p>
            <h3>Your colour: 
                <?php
                    echo "" .$_SESSION['my_colour'] . "</br>";
                ?>
            </h3>
        </p>
        <table id="botons">
            <tr>
                <td>
                    <form action="entry.php"><input type="submit" value="Data" ></form>
                </td>
                <td>
                    <p>
                        <?php
                            print($_SESSION["count"]);
                            print(" veces");
                        ?>
                    </p>
                </td>
                <td>
                    <form action="country.php"><input type="submit" value="Country"></form>
                </td>
            </tr>
        </table>
    </body>
</html>