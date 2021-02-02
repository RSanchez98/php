<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-02</title>
</head>
<body>
    <?php
        echo "+  ==> ", $_POST['n1']," + ",$_POST['n2'], " = ", $_POST['n1']+$_POST['n2'],"<br>";
        echo "-  ==> ", $_POST['n1']," - ",$_POST['n2'], " = ", $_POST['n1']-$_POST['n2'],"<br>";
        echo "x  ==> ", $_POST['n1']," * ",$_POST['n2'], " = ", $_POST['n1']*$_POST['n2'],"<br>";
        echo "÷  ==> ", $_POST['n1']," / ",$_POST['n2'], " = ", $_POST['n1']/$_POST['n2'],"<br>";

    ?>
</body>
</html>