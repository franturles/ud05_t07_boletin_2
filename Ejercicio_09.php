<html>
    <head>
        <title>Ejercicio 9</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 9:</h1>
        <h2>Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1/3 πr2h.</h2>
    </head>
    <body>
    <form action='Ejercicio_09.php' method='post'>
    <p>Diametro<input type='text' name='Diametro' id='N'></p>
    <p>Haltura<input type='text' name='Haltura' id='N'></p>
    <p><input type='submit' /></p>
    </form>
<?php 
$Diametro = $_POST['Diametro'];
$Haltura = $_POST['Haltura'];
$PI = 3.14;
$Radio=$Diametro/2;
if (is_numeric($Diametro) && is_numeric($Haltura)) {
    $Volumen=$PI*$Radio*$Radio*$Haltura/3;
    echo "El Volumen del cono es: $Volumen" ;
}
?>  
</html>