<?php

    $conexion=mysqli_connect("localhost", "root", "", "database");

?>

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
        
        <table border="1px">
            <tr>

                <td>id_usuario</td>
                <td>nombre</td>
                <td>apellidos</td>
                <td>contraseña</td>
                <td>edad</td>
                <td>telefono</td>
                <td>direccion</td>
                <td>placa_veh</td>

            </tr>

            <?php
                $sql="SELECT * FROM usuarios";
                $resultado=mysqli_query($conexion, $sql);

                while ($mostrar=mysqli_fetch_array($resultado)) {
                
            ?>

            <tr>
                <td><?php echo $mostrar["id_usuario"] ?></td>
                <td><?php echo $mostrar["nombre"] ?></td>
                <td><?php echo $mostrar["apellidos"] ?></td>
                <td><?php echo $mostrar["contraseña"] ?></td>
                <td><?php echo $mostrar["edad"] ?></td>
                <td><?php echo $mostrar["telefono"] ?></td>
                <td><?php echo $mostrar["direccion"] ?></td>
                <td><?php echo $mostrar["placa_veh"] ?></td>
            </tr>

            <?php
            }
            ?>

        </table>

    </div>
    
</body>
</html>