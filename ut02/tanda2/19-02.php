<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19-02</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $primero = $num[0];
        $ultimo = substr($num, -1);
        $cifras = strlen($num);

        if($cifras>= 6)
        {
            echo "No puede haber mas de 5 cifras";
        }
        else
        {
            if($cifras == 1)
            {
                echo "Primero $primero <br> El numero $num es capicua";
            }
            if($cifras == 2)
            {
                if($primero == $ultimo)
                {
                    echo "Primero: ",$primero," <br> Segundo ",$ultimo, "<br>";
                    echo "El numero $num es capicua";
                }
                else
                {
                    echo "Tienen dos cifras pero no es capicua";
                    echo "El numero $num NO es capicua";

                }
            }
            if($cifras == 3)
            {
                if($primero == $ultimo)
                {
                    echo "Primero: ",$primero," <br> Segundo",$num[1]," <br> Tercero ",$ultimo, "<br>";
                    echo "El numero $num es capicua";
                }
                else
                {
                    echo "Tienen tres cifras pero no es capicua";
                    echo "El numero $num NO es capicua";

                }
            }
            if($cifras == 4)
            {
                if(($primero == $ultimo) && ($num[1]==$num[2]))
                {
                    echo "Primero: $primero <br> Segundo $num[1] <br> Tercero $num[2] <br> Cuarto:$ultimo<br>";
                    echo "El numero $num es capicua";
                }
                else
                {
                    echo "Tienen cuatro cifras pero no es capicua";
                    echo "El numero $num NO es capicua";

                }
            }
            if($cifras == 5)
            {
                if(($primero == $ultimo) && ($num[1]==$num[3]))
                {
                    echo "Primero: $primero <br> Segundo $num[1] <br> Tercero $num[2] <br> Cuarto $num[3] <br>Quinto $ultimo<br>";
                    echo "El numero $num es capicua";
                }
                else
                {
                    echo "El numero $num NO es capicua";
                }
            }
        }
    ?>
    <br><br>
    <a href="19-01.php">>Volver</a>
</body>
</html>