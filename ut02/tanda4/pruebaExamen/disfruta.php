<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisFruta</title>
</head>
<body>
    <?php
        
            $numAleator = rand(7,20);
            echo $numAleator, "  frutas <br>";

            $frutas = ["&#127815;","&#127816;", "&#127817;","&#127818;","&#127819;",
            "&#127820;","&#127821;","&#127821;","&#127822;","&#127823;","&#127824;",
            "&#127825;","&#127826;","&#127827;"];
            $frutasMuestra=[];

            echo "<p>";
            for($i = 0; $i < $numAleator; $i++)
            {
                $frutasAleatorio = rand(0, sizeof($frutas)-1);
                $frutasMuestra[]=$frutasAleatorio;
                echo $frutas[$frutasAleatorio];             
            }
            echo "</p>";

            echo "RESULTADOS <br>";
            
            for($i = 0; $i<sizeof($frutasMuestra);$i++)
            {
                $contador = 0;
                foreach($frutasMuestra as $valor)
                {
                    if($valor == $frutasMuestra[$i])
                    {
                        $contador++;
                    }
                }

                if(!strpos($texto, $frutas[$frutasMuestra[$i]]))
                {
                    if($contador == 1)
                    {
                        $texto = $texto. $frutas[$frutasMuestra[$i]].$contador."<br>";
                    }
                    else
                    {
                        $texto = $texto .$frutas[$frutasMuestra[$i]].$contador."<br>";
                    }
                }
            }


        
        echo $texto;
    ?>
</body>
</html>