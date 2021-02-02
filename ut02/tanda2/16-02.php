<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16-02</title>
</head>
<body>
    <?php
        $n = $_POST['num'];
        echo "La ultima cifra del numero $n es el numero ", substr($n,-1);
    ?>
    <br><br>
    <a href="16-01.php">>Volver</a>
</body>
</html>