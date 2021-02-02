<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pares y nones</title>
</head>
<body>
    <?php
    if(!isset($_POST['nAleat']))
    {
        $nAleat1 = rand(0,5);
        $nAleat2 = rand(0,5);
        $suma = $nAleat1+$nAleat2;
    }
    else
    {
        $nAleat1 = rand(0,5);
        $nAleat2 = rand(0,5);
        $suma = $nAleat1+$nAleat2;
    }
    

    if($nAleat1 == 0||$nAleat2 == 0)
    {
        echo "<img src=\"0.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"0.jpeg\">";
        }
    }
    
    if($nAleat1 == 1||$nAleat2 == 1)
    {
        echo "<img src=\"1.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"1.jpeg\">";
        }
    }
    
    if($nAleat1 == 2||$nAleat2 == 2)
    {
        echo "<img src=\"2.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"2.jpeg\">";
        }
    }

    if($nAleat1 == 3||$nAleat2 == 3)
    {
        echo "<img src=\"3.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"3.jpeg\">";
        }
    }

    if($nAleat1 == 4||$nAleat2 == 4)
    {
        echo "<img src=\"4.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"4.jpeg\">";
        }
    }

    if($nAleat1 == 5||$nAleat2 == 5)
    {
        echo "<img src=\"5.jpeg\">";
        if($nAleat1 == $nAleat2)
        {
            echo "<img src=\"5.jpeg\">";
        }
    }

   
    if($suma % 2 == 0)
    {
        echo "Gana 1";
    }
    else
    {  
        echo "Gana 2";
    }

    ?>
    <form action="paresYnones.php" method="post">
        <input type="hidden" name="j1"><br>
        <input type="hidden" name="j2"><br>
        <input type="hidden" name="nAleat1" value="<?php echo $nAleat1; ?>">
        <input type="hidden" name="nAleat2" value="<?php echo $nAleat2; ?>">
        <input type="hidden" name="suma"2 value="<?php echo $suma; ?>">

        <a href="paresYnones.php">Recargar</a>

    </form>
</body>
</html>