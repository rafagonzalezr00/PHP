<!DOCTYPE html>
<html>
    <head>
        <title>Soda Machine</title>
        <style>
            body{
                margin-left: 150px;
            }
        </style>
    </head>
    <body>
        <form action="solution.php" method="POST">
            <h4>Products:</h4>
            <input type="radio" name="product" value="coke">Coke</input><br>
	        <input type="radio" name="product" value="water">Water</input><br>
            <input type="radio" name="product" value="beer">Beer</input><br>
            <p>Your money; <input type="number" name="money"></p>
	        <input type="submit" value="Buy">
        </form>
    </body>
</html>