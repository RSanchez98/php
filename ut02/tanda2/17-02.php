<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17-02</title>
</head>
<body>
    <?php
        $n = $_POST['num'];

        if(strlen($n) >= 6)
        {
            echo "No puede haber mas de 5 cifras";
        }
        else
        {
            echo "La primera cifra del numero $n es el numero ", ($n[0]);
        }
    ?>
    <br><br>
    <a href="17-01.php">>Volver</a>
</body>
</html>