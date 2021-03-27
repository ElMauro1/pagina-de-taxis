<?php

include("database.php");
session_start();

$conexion=mysqli_connect("localhost","root","","database");

if($conexion){

    $id=$_POST["identificacion"];
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $contraseña=$_POST["contraseña"];
    $contraseña1=$_POST["contraseña1"];
    $edad=$_POST["edad"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $vehiculo=$_POST["vehiculo"];   

    if ($contraseña == $contraseña1) {

        

    $consulta0="SELECT*FROM vehiculo where placa='$vehiculo'";
    $resultado0=mysqli_query($conexion,$consulta0);

    $fila=mysqli_num_rows($resultado0);

    if ($fila) { 

    $consulta="INSERT INTO usuarios VALUES('$id', '$nombre', '$apellidos', '$contraseña', '$edad', '$telefono', '$direccion', '$vehiculo')";

    $resultado=mysqli_query($conexion, $consulta);

    if ($resultado) {

        include("index.php");
        ?>
        <h1 class="yes">REGISTRO DEL USUARIO COMPLETADO</h1>
        <?php

    } else {

        include("registro.php");
        ?>
        <h1 class="f">ERROR DE REGISTRO</h1>
        <?php

    }

}   else {

    include("registro.php");
    ?>
    <h1 class="f">LAS CONTRASEÑAS NO COINCIDEN</h1>
    <?php

}

} else {

    include("registro.php");
    ?>
    <h1 class="f">LA PLACA NO EXISTE</h1>
    <?php

}

}
mysqli_close($conexion);

?>