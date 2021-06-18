<?php

include("conexion.php");


/*$user = "root";
$pass = "";*/

if(isset($_POST['btnEnviar'])){
    $idUsuario = $_POST["idUsuario"];
    $idAmigo = $_POST["idAmigo"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellidoP"];
    $apellido2 = $_POST["apellidoM"];
    $correo = $_POST["correo"];
    $passw = $_POST["pass"];
    $fechaNac = $_POST["fechaNac"];
    $sexo = $_POST["sexo"];

    $insertarDatos = "INSERT INTO usuario (IdUsuario,Nombre,Apellido1,Apellido2,CorreoElectronico,Contrasena,FechaNacimiento,IdUsuarioAmigo,Sexo) 
                                   VALUES ('$idUsuario','$nombre','$apellido1','$apellido2','$correo','$passw','$fechaNac','$idAmigo','$sexo')";
    
    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);

    /*if(!$ejecutarInsertar){
        echo "No se lleno el formulario";
    }*/

    if(mysqli_query($conexion, $insertarDatos)){
        echo "<script> alert ('usuario registrado'); window.location='index.html'</script>";
    } else{
        echo "<script> alert ('usuario NO registrado'); window.location='index.html'</script>";
    }
}
/*mysqli_query($conexion, "INSERT INTO usuario (IdUsuario,Nombre,Apellido1,Apellido2,CorreoElectronico,Contrasena,FechaNacimiento,IdUsuarioAmigo,Sexo) VALUES")*/

?>