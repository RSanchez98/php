<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-02</title>
</head>
<body>
    <?php
        $dia = $_POST['dia'];

        switch($dia)
        {
            case "lunes" : echo "Desarrollo web en entorno cliente"; break;
            case "martes" : echo "Empresa e iniciativa emprendedora"; break;
            case "miercoles" : echo "Desarrollo web en entorno servidor"; break;
            case "jueves": echo "Despliegue de aplicaciones web"; break;
            case "viernes": echo "Diseño de interfaces web"; break;
            case "sabado":
            case "domingo": echo "Vete para la cama bobo"; break;
            default: echo "Dia introducido incorrecto";
        }
    ?>
    <br>
    <a href="01-01.php">Volver</a>
</body>
</html>