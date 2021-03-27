<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cs.css">
    <title>Tu Taxi</title>
    <link rel="icon" type="image/jpg" href="logo.png">
</head>
<body>
    <div class="main">
        <img src="logo.png" alt="logo">        
        <div class="formu">
            <form action="consulta.php" method="post">
				<p>Usuario 
                    <br> 
                    <input type="text" && type=reset placeholder="Ingrese su identificacion" name="usuario" class="usu" pattern="[a-zA-Z0-9]+" required></p>
				<p>Contraseña 
                    <br>
                    <input type="password" placeholder="Ingrese su contraseña" name="contraseña" class="pass" required></p>
				<input type="submit" value="Ingresar" class="ing">
                <br><br>
		    </form>    
            <form action="registro_auto.php" >
                <input type="submit" value="Registrarse" class="reg">
            </form>
        </div>
    </div>
    
</body>
</html>