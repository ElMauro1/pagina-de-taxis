<?php
include("database.php");
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","database");

$consulta="SELECT*FROM usuarios where id_usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inicio.php");

}else {

    include("index.php");
  ?>

  <h1 class="f">ERROR DE AUTENTICACION</h1>
  <?php
}
mysqli_free_result($filas);
mysqli_close($conexion);
