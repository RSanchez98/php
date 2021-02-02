<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      echo "El volumen del cono es de ";
      $volumen = (1/3)* pi() *$_POST['radio']*$_POST['radio']*$_POST['altura'];
      echo round ($volumen, $precision = 2), " cm <sup>3</sup>"
    ?>
    <br><br>
    <a href="09-01.php">>> Volver</a>
    </body>
</html>