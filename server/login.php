<?php

require_once 'conexionbd.php';

$dniNif = $_POST['dniNif'];

$password = $_POST['password'];
 
$sql = "SELECT * FROM usuarios WHERE dni_nif_usuario = '$dniNif' AND password_usuario = '$password'";

 // $resultado = $conexion->query($sql);
  

  if(!$consulta = $conexion->query($sql)){
    echo "ERROR: no se pudo ejecutar la consulta!";
  }else{ 
    
    $filas = mysqli_num_rows($consulta);

    
    if($filas == 0){
        echo "<script>alert('Usuario o clave incorrectos');</script>";
    }else{

        echo ' http://localhost/Trabajadores/curriculum.php';
       // header('location: http://localhost/Trabajadores/curriculum.php'); // redirigir a otra página
        

        //echo "<script> location.href = 'http://localhost/Trabajadores/curriculum.php';</script>";
        
        exit();
    }

}

 /* if($resultado == true){
    // Guardo en la sesión el email del usuario.
    $_SESSION['dniNif'] = $dniNif;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: curriculum.php"); 
  }else{
    echo 'El DNI o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
  */
?>