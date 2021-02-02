<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
</head>
<body>
    <?php
        if(!isset($_GET['temperatura']))
        {
            $mes = array("Enero", "Febrero", "Marzo", "Abril", 
            "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", 
            "Noviembre", "Diciembre");

    ?>
            <p>Por favor introduzca las temperaturas de cada mes</p>
            <form action="05.php" method="get">

    <?php
                echo "<table>";
                for($i = 0; $i < 12; $i++)
                {
                    echo "<tr><td>$mes[$i]</td><td> 
                    <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br></td></tr>";
                }
                echo "</table><br>"
    ?>
                <input type="submit" value="Continuar">
            </form>

    <?php
        }
        else    
        {
            $temperatura = $_GET['temperatura'];
            echo "<table>";

            foreach($temperatura as $mes => $tempMes)
            {
                echo "<tr><td>$mes</td><td>";

                for($i = 0; $i < $tempMes; $i++)
                {
                    echo "<img src=\"bggreen.png\">";
                }
                echo " $tempMes","ºC<br></td></tr>";
            }
            echo "</table>";
            ?>
            <br>
            <a href ="05.php">Volver</a>
    <?php
        }
    ?> 
</body>
</html>