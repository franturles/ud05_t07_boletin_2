<html>
    <head>
        <title>Ejercicio 7</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 7:</h1>
        <h2>Escribe un programa que calcule el total de una factura a partir de la base imponible.</h2>
    </head>
    <body>
    <form action='Ejercicio_07.php' method='post'>
    <p>Total de la Factura:<input type='text' name='Factura' id='N'></p>
    <p><input type='submit' /></p>
    </form>
<?php
$Dinero = $_POST['Factura'];
if (is_numeric($Dinero)) {
    $Resultado = $Dinero * 1.21;
    echo "El Total con la base imponible es $Resultado" ;
}
?>
</body>
</html>