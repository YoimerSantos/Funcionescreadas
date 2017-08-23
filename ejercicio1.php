<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio1</title>
  </head>
  <body>
    <?php
    function mens( $mensaje){
    $mensajes=0;
    if ($mensaje=="saludo") {
      $mensajes="Hola a atodos";
    }
   elseif ($mensaje=="Nombre") {
     $mensajes="Javier Romero";
   }
   return $mensajes;
 }
     ?>

  </body>
</html>
