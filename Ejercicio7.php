<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio7</title>
  </head>
  <body>
    <form  method="post">
      <label for="">Ingrese un caracter: </label>
      <input type="text" name="c" value="">
      <input type="submit" name="" value="Verificar">

    </form>
    <?php
     function caracter($c){

     if ( $c=='0' or $c=='1' or $c=='2' or $c=='3' or $c=='4' or $c=='5' or $c=='7' or $c=='8' or $c=='9') {
       echo "Es un numero";}
     else {
       echo "No es un numero";
     }

   }
   echo caracter($_POST['c']);
     ?>


  </body>
</html>
