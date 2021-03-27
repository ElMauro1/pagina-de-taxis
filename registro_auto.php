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
        <div class="formu3"> 
            <form action="validar_registro.php" method="post">
                <p>Datos del vehiculo</p>
                    <br>
                <input type="text" placeholder="Placa" name="placa" class="placa" required>
                <input type="text" placeholder="Marca del vehiculo" name="marca" class="id_ve" required>
                <input type="text" placeholder="Referencia ej.(Aveo Gt)" name="referencia" class="referencia" required>
                <input type="text" placeholder="Color" name="color" class="color" required>                
                <input type="text" placeholder="Nombre propietario" name="propietario" class="propietario" required> 
                <p class="soat_0">Fecha de vencimiento SOAT</p>
                <input type="date" name="soat" class="soat" required>
                <input type="submit" value="Registrar" class="registrar1">
            </form>
        </div>
    </div>
</body>
</html>