<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
  </head>
  <body>
    <?php
   function Operamate($n1, $n2, $seleccion){
    $Resultado=0;
    if ($seleccion=="sumar") {
      $Resultado=$n1+$n2;
    }
   elseif ($seleccion=="restar") {
       $Resultado=$n1-$n2;
   }
   elseif ($seleccion=="multiplicar") {
       $Resultado=$n1*$n2;
   }
   elseif ($seleccion=="dividir") {
       $Resultado=$n1/$n2;

   }
   elseif ($Resultado=="potencia") {
       $Resultado=pow($n1, $n2);
   }
   elseif ($seleccion=="raizn1") {
     $Resultado=sqrt($n1);
   }
   elseif ($seleccion=="raizn2") {
     $Resultado=sqrt($n2);
   }

   return $Resultado;



   }




     ?>

  </body>
</html>
