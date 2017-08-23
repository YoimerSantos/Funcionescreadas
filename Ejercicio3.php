<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio3</title>
  </head>
  <body>
    <?php

     function promedio($Ara, $Exito, $Sao, $funcion){

       $promedio=0;
       if ($funcion=="promedio") {
        $promedios=($Ara+$Exito+$Sao)/3;

       }
       echo "Precio Detergente <br> <br> El precio en Ara es de: $Ara<br><br>
      El precio en Exito es de: $Exito <br> <br> El precio en Sao es de: $Sao <br> <br>";
      echo "El promedio es:";
     return $promedios;

     }

     echo promedio(4200, 3700, 5200, "promedio");


     ?>
  </body>
</html>
