<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18-02</title>
</head>
<body>
    <?php
        $num = $_POST['num'];

        $cifras = strlen($num);

        if($cifras>= 6)
        {
            echo "No puede haber mas de 5 cifras";
        }
        else
        {
            echo "El numero $num tiene $cifras cifras";
        }
    ?>
    <br><br>
    <a href="18-01.php">>Volver</a>
</body>
</html>