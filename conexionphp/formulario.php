<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stilos.css">
  <title>Document</title>
</head>
<body>
  
<header>
    <div class="container__menu1">
        <input type="checkbox" id="check__menu"> 
        <label id="#label__check" for="check__menu">
            <i class="fa-solid fa-bars icon__menu"></i>
        </label>
        <div class="menu">
            <nav>
                <ul>
                    <div>
                        <a href="../index.html"> <img src="./imagen/etnia.jpg" class="icono" /></a>
                    </div>
                    <li><a href="./formulario.php">Formulario</a></li>
                    <li><a href="./ver clientes.php">Ver clientes</a></li> 
                </ul>       
            </nav>
            
        </div>
    </div>
 </header> 
 <br>
 <br>
 <br>
 <br>
<form action="./insertar_cliente.php" method="POST">

<input type="text" name="Nombres" placeholder="Ingrese Nombre" required><br>
    <input type="text" name="Apellidos" placeholder="Ingrese Apellido" required><br>
    <input type="number" name="celular" placeholder="celular (+54)" required><br>
    <input type="email" name="correo" placeholder="Ingrese su correo" required><br>
    <input type="text" name="direccion" placeholder="Ingrese su direccion" required><br>
    <button type="submit" name="Enviar">Enviar</button>
    <a href="../index.html">Volver a la pagina principal </a>



</form>
</body>
</html>