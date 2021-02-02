<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
</head>
<body>
    <?php
        if(!isset($_GET['n']))
        {
            $contador ="0";
            $numeroTexto = "";
            $n ="";
        }
        else
        {
            $contador = $_GET['contador'];
            $numeroTexto = $_GET['numeroTexto'];
            $n = $_GET['n'];
            $numeroTexto = $numeroTexto.' '.$n;
            $contador++;

        }

        if($contador < 8)
        {
    ?>      
            <form action="06.php" method="get">
                <input type="number" name="n" autofocus>
                <input type="hidden" name="contador" value="<?=$contador; ?>">
                <input type="hidden" name="numeroTexto" value="<?=$numeroTexto;?>">
                <input type="submit" value="Calcular">
            </form>
    <?php
        }
        else
        {
            $numeros = explode(" ", substr($numeroTexto, 1));

            foreach($numeros as $n)
            {
                if($n % 2 == 0)
                {
                    echo "<span style=\"color: magenta;\">$n&nbsp;</span>";
                }
                else
                {
                    echo "<span style=\"color: green;\">$n&nbsp;</span>";
                }
            }
            echo "<span style=\"color: magenta;\"><br>pares<br></span>";
            echo "<span style=\"color: green;\">impares</span>";
        ?>
        <br><br>
        <a href="06.php">>> Volver</a>
        <?php
      }
      ?>
</body>
</html>