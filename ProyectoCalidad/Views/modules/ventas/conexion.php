<?php 
 $conexion = new PDO('mysql:host=localhost;dbname=restaurant_calidad','restaurant','880520');
   date_default_timezone_set('America/Argentina/Buenos_Aires');
 $conexion->exec('SET CHARACTER SET utf8');

 ?>