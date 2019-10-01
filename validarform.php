<?php
   if(isset($_POST['submit'])) {
    if(empty($nombre)) {
      echo "<p class='error'>*Agrega tu nombre</p>";
    }
    if(empty($apellido)) {
      echo "<p class='error'>*Agrega tu apellido</p>";
   }
   if(empty($correo)) {
     echo "<p class='error'>*Falta el correo</p>";
   }
   if(empty($usuario)) {
     echo "<p class='error'>*Usuario no identificado</p>";
   }
   if(empty($clave)) {
     echo "<p class='error'>*Introduce tu contraseña</p>";
   }
   if(empty($telefono)) {
     echo "<p class='error'>*Agrega tu telefono</p>";
   } else {
     if(!is_numeric($telefono)) {
     echo "<p class='error'>*El telefono debe ser un numero</p>";
   }
 }
 ?>
