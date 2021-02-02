<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 04</title>
</head>
<body>
    <!--
        Escribe un programa que muestre tu horario de clase mediante una tabla. 
        Aunque se puede hacer íntegramente en HTML (igual que los ejercicios 
        anteriores), ve intercalando código HTML y PHP para familiarizarte con 
        éste último.
    -->
    <table>
    <tr>
        <th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th>
    </tr>
    <tr>
        <td>cliente</td><td>empresa</td><td>servidor</td><td>despliegue</td><td>interfaces</td>
    </tr>
    <?php
        echo "<td>cliente</td><td>empresa</td><td>servidor</td><td>empresa</td><td>interfaces</td>"
    ?>
    <tr>
        <td>recreo</td>
    </tr>
    <tr>
        <td>interfaces</td><td>despliegue</td><td>interfaces</td><td>empresa</td><td>servidor</td>
    </tr>
    <?php
        echo "<td>interfaces</td><td>despliegue</td><td>interfaces</td><td>servidor</td><td>servidor</td>"
    ?>
    <tr>
        <td>servidor</td><td>servidor</td><td>cliente</td><td>servidor</td><td>cliente</td>
    </tr>
    <tr>
        <td>servodpr</td><td>servidor</td><td>cliente</td><td>servidor</td><td>cliente</td>
    </tr>
    </table>
</body>
</html>