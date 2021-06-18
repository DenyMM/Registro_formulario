<?php  
 
   $server  = "localhost";
   $user  = "root";
   $pass  = "";
   $db    = "es1511106739";

   $conexion = new mysqli($server, $user, $pass, $db); 

   if($conexion->connect_errno) {
       die("La conexion no se logro" . $conexion->connect_errno);
   }else {
    echo "Se realizo la conexion";
}

?> 