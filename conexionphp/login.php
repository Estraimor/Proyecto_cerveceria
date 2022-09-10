<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="login-box">
        <img class="avatar" src="./imagen/etnia.jpg" width="700px" height="500px" alt="Logo etnia" >
        <h1>Login Here</h1>
        <form action="./validar login.php" method="POST">
            <label for="Nombre">Nombre</label>
            <input class="nombre" type="text" placeholder="Ingrese su nombre"name=usuario>
            <label for="Contraseña">Contraseña</label>
            <input class="contraseña" type="password" placeholder="Ingrese su contraseña"name=contraseña>
            <input type="submit" value="ingresar">
            <br>
            <div>
                <a href="./conexionphp/formulario.php"><font color="white">Crear cuenta</font></a>
            <br>
            <br>   
                <a href="#"><font color="white">¿Se a olvidado su contraseña?</font></a>
            </div>
            

        </form>
        
    </div>
</body>
</html>