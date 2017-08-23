<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio6</title>
  </head>
  <body>
   <form  method="post">
     <label for="">Ingrese el numero a verificar: </label>
     <input type="text" name="N" value="">
     <input type="submit" name="" value="Verificar">
   </form>


    <?php

    function par($N){
      $resultado=0;

      if (($N % 2)==0) {
        echo "El numero $N es par";
      }
      else {
        echo "El numero $N no es par";
      }
    }
    echo par($_POST['N']);

     ?>
  </body>
</html>
