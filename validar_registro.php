<?php

include("database.php");
session_start();

$conexion=mysqli_connect("localhost","root","","database");

if($conexion){

    $placa=$_POST["placa"];
    $marca=$_POST["marca"];
    $referencia=$_POST["referencia"];
    $color=$_POST["color"];
    $propietario=$_POST["propietario"];
    $soat=$_POST["soat"];

    $consulta="INSERT INTO vehiculo VALUES('$placa', '$marca', '$referencia', '$color', '$propietario', '$soat')";

    $resultado=mysqli_query($conexion, $consulta);

    if ($resultado) {

        include("registro.php");
        ?>
        <h1 class="yes">REGISTRO DEL VEHICULO COMPLETADO</h1>
        <?php

    } else {

        include("registro_auto.php");
        ?>
        <h1 class="f">ERROR DE REGISTRO</h1>
        <?php

    }

}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
