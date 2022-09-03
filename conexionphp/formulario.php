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
                </ul>       
            </nav>
            
        </div>
    </div>
 </header> 
 <br>
 <br>
 <br>
 <br>
 <section class="form-register">
<form action="./insertar_cliente.php" method="POST">

<input class="controls" type="text" name="Nombres" placeholder="Ingrese Nombre " required><br>
    <input class="controls" type="text" name="Apellidos" placeholder="Ingrese su apellido " required><br>
    <input class="controls" type="number" name="celular" placeholder="celular (+54)" required><br>
    <input class="controls" type="email" name="correo" placeholder="Ingrese su correo" required><br>
    <input class="controls" type="text" name="direccion" placeholder="Ingrese su direccion" required><br>
    <button class="botons" type="submit" name="Enviar">Enviar</button>
    <a href="../index.html">Volver a la pagina principal </a>



</form>
</section>
</body>
</html>