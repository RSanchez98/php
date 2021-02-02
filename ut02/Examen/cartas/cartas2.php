<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas 2</title>
    <link href="examen.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Muestra Cartas</h1>
<?php
    $c1 = "<img src=\"img/c1.svg\" width=\"100px\">";
    $c2 = "<img src=\"img/c2.svg\" width=\"100px\">";
    $c3 = "<img src=\"img/c3.svg\" width=\"100px\">";
    $c4 = "<img src=\"img/c4.svg\" width=\"100px\">";
    $c5 = "<img src=\"img/c5.svg\" width=\"100px\">";
    $c6 = "<img src=\"img/c6.svg\" width=\"100px\">";
    $c7 = "<img src=\"img/c7.svg\" width=\"100px\">";
    $c8 = "<img src=\"img/c8.svg\" width=\"100px\">";
    $c9 = "<img src=\"img/c9.svg\" width=\"100px\">";
    $c10 = "<img src=\"img/c10.svg\" width=\"100px\">";

    $d1 = "<img src=\"img/d1.svg\" width=\"100px\">";
    $d2 = "<img src=\"img/d2.svg\" width=\"100px\">";
    $d3 = "<img src=\"img/d3.svg\" width=\"100px\">";
    $d4 = "<img src=\"img/d4.svg\" width=\"100px\">";
    $d5 = "<img src=\"img/d5.svg\" width=\"100px\">";
    $d6 = "<img src=\"img/d6.svg\" width=\"100px\">";
    $d7 = "<img src=\"img/d7.svg\" width=\"100px\">";
    $d8 = "<img src=\"img/d8.svg\" width=\"100px\">";
    $d9 = "<img src=\"img/d9.svg\" width=\"100px\">";
    $d10 = "<img src=\"img/d10.svg\" width=\"100px\">";

    $p1 = "<img src=\"img/p1.svg\" width=\"100px\">";
    $p2 = "<img src=\"img/p2.svg\" width=\"100px\">";
    $p3 = "<img src=\"img/p3.svg\" width=\"100px\">";
    $p4 = "<img src=\"img/p4.svg\" width=\"100px\">";
    $p5 = "<img src=\"img/p5.svg\" width=\"100px\">";
    $p6 = "<img src=\"img/p6.svg\" width=\"100px\">";
    $p7 = "<img src=\"img/p7.svg\" width=\"100px\">";
    $p8 = "<img src=\"img/p8.svg\" width=\"100px\">";
    $p9 = "<img src=\"img/p9.svg\" width=\"100px\">";
    $p10 = "<img src=\"img/p10.svg\" width=\"100px\">";

    $t1 = "<img src=\"img/t1.svg\" width=\"100px\">";
    $t2 = "<img src=\"img/t2.svg\" width=\"100px\">";
    $t3 = "<img src=\"img/t3.svg\" width=\"100px\">";
    $t4 = "<img src=\"img/t4.svg\" width=\"100px\">";
    $t5 = "<img src=\"img/t5.svg\" width=\"100px\">";
    $t6 = "<img src=\"img/t6.svg\" width=\"100px\">";
    $t7 = "<img src=\"img/t7.svg\" width=\"100px\">";
    $t8 = "<img src=\"img/t8.svg\" width=\"100px\">";
    $t9 = "<img src=\"img/t9.svg\" width=\"100px\">";
    $t10 = "<img src=\"img/t10.svg\" width=\"100px\">";

    $arrayCartCorazo = [$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10];
    $arrayCartDiama = [$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$d10];
    $arrayCartPicas = [$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10];
    $arrayCartTrebol = [$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10];

    if (isset($_POST['num'])) {
        $numero = $_POST['num'];
        $palo = $_POST['palo'];
    } else {
        $numero = 0;
        $palo = "";
    }

    
     if ($numero == "0" || $palo == "") {
        echo "Elige linea y palo";
     } else {
        
        if ($palo == "corazones") 
        {
            for ($i=0; $i < $numero; $i++) 
            { 
                $random = rand(1,10);

                echo $arrayCartCorazo[$random];

            } 
        }
        if ($palo == "treboles") {
            for ($i=0; $i < $numero; $i++) { 
                $random = rand(1,10);
                echo $arrayCartTrebol[$random];
            } 
        }
        if ($palo == "diamantes") {
            for ($i=0; $i < $numero; $i++) { 
                $random = rand(1,10);
                echo $arrayCartDiama[$random];
            } 
        }
        if ($palo == "picas") {
            for ($i=0; $i < $numero; $i++) { 
                $random = rand(1,10);
                echo $arrayCartPicas[$random];
            } 
        }

     }
?>
    
</body>
</html>