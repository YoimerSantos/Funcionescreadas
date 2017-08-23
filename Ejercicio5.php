<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio5</title>
  </head>
  <body>


    <form class="" action="fahrenheit.php" method="post">
     <label for="">Ingrese en grados celcius a fahrenheit</label>
     <input type="text" name="grados" value=""><br><br>
     <input type="submit" name="" value="Convertir"><br>
   </form><br>
    <form class="" action="kelvin.php" method="post">
      <label for="">Ingrese en grados celcius a kelvin</label>
      <input type="text" name="grados" value=""><br><br>
      <input type="submit" name="" value="Convertir">
    </form>
    <?php
    function conversion( $grados, $temperatura){

     $convert=0;
     if ($temperatura=="fahrenheit") {
       $convert=($grados*1.8)+32;
     }
     elseif ($temperatura=="kelvin") {
       $convert=$grados+273.15;
     }
     echo "La Conversion es: <br>";
    return $convert;

    }


     ?>

  </body>
</html>
