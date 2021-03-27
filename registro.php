<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tu Taxi</title>
    <link rel="icon" type="image/jpg" href="logo.png">
</head>
<body>
    <div class="main">    
    <img src="logo.png" align="left" alt="logo">  
        <div class="formu2"> 
            <form action="validar_registro_per.php" method="post">
                <p>Datos personales</p>
                    <br>
                <input type="text" placeholder="Ingrese su identificacion" name="identificacion" class="id" required>
                <input type="text" placeholder="Ingrese su nombre" name="nombre" class="nombre" required>
                <input type="text" placeholder="Ingrese sus apellidos" name="apellidos" class="apellidos" required>
                <input type="password" placeholder="Ingrese su contraseña" name="contraseña" class="contraseña" required>
                <input type="password" placeholder="Repita su contraseña" name="contraseña1" class="contraseña1" required>
                <input type="number" placeholder="Edad" name="edad" min="18" max="100" class="edad" required>
                <input type="text" placeholder="Numero telefonico" name="telefono" class="telefono" required>
                <input type="text" placeholder="Direccion" name="direccion" class="direccion" required>
                <input type="text" placeholder="Placa del vehiculo" name="vehiculo" class="vehiculo" required>
                <input type="submit" value="Registrar" class="registrar">
            </form>
        </div>
    </div>
</body>
</html>