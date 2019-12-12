<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h2>Data Entry</h2>
        <form action="actions.php" method="POST">
            <p>User: <input type="text" name="name"></p>
            <p>Password: <input type="password" ></p>
            <p>Money: <input type="number" name="money"></p>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

cree una clase llamada cuenta en php, al menos, los siguientes métodos:
- depósito: para aumentar el saldo con una cantidad establecida como parámetro
- retirar: para disminuir el saldo con una cantidad establecida como parámetro
- transferencia: para mover cierta cantidad a otra cuenta
-get_balance: para obtener el saldo de la cuenta
obviamente, necesitará algunas propiedades obligatorias para guardar datos relacionados con el propietario y la cuenta, pero el resto de los argumentos dependerá de usted.
También puede crear algunas clases adicionales si siente la necesidad de hacerlo.
la interfaz de usuario será suya, pero debe permitir realizar todas las operaciones descritas anteriormente.
En este ejercicio, creará varias cuentas, transferirá dinero y verificará los saldos.