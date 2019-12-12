<!DOCTYPE html>
<html>
    <head>
        <title>Linux Calculator</title>
        <style>
            td{
                text-align: center;
            }
            #formu{
                margin-left: 250px;
                margin-top: -200px;
            }
            h2{
                margin-left: 100px;
            }
        </style>
    </head>
    <body>
        <h2>Linux Permission Calculator</h2>
            <div id="ejemplo">
                <p>You have to select the boxes that you need and press submit</p>
                <p>
                    <b>r:</b>  read
                    <b>w:</b> write
                    <b>x:</b> execute
                </p>
                <p>Example: rwxrwxrwx</p>
                <p>owner(rwx), group(rwx), other(rwx)</p>
                <img src="ejemplo.png">
            </div>
            <div id="formu">
                <form action="solution.php" method="$_POST" id="formu">
                    <table>
                        <tr>
                            <td>
                                <b>Permission</b>
                            </td>
                            <td>
                                <b>Owner</b>
                            </td>
                            <td>
                                <b>Group</b>
                            </td>
                            <td>
                                <b>Other</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Read</b>
                        </td>
                        <td>
                            <input type="checkbox" name="owner4" value="4">
                        </td>
                        <td>
                            <input type="checkbox" name="group4" value="4">
                        </td>
                        <td>
                            <input type="checkbox" name="other4" value="4">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Write</b>
                        </td>
                        <td>
                            <input type="checkbox" name="owner2" value="2">
                        </td>
                        <td>
                            <input type="checkbox" name="group2" value="2">
                        </td>
                        <td>
                            <input type="checkbox" name="other2" value="2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Execute</b>
                        </td>
                        <td>
                            <input type="checkbox" name="owner1" value="1">
                        </td>
                        <td>
                            <input type="checkbox" name="group1" value="1">
                        </td>
                        <td>
                            <input type="checkbox" name="other1" value="1">
                        </td>
                    </tr>
                    </table>
                    <input type="submit" value="Submit">
                </form>
            </div>
    </body>
</html>