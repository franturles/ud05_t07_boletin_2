<html>
    <head>
        <title>Ejercicio 5</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 5:</h1>
        <h2>Escribe un programa que calcule el área de un rectángulo.</h2>
    </head>
    <body>
    <form action='Ejercicio_05.php' method='post'>
    <p>Base:<input type='text' name='n1' id='N'></p>
    <p>Altura:<input type='text' name='n2' id='N'></p>
    <p><input type='submit' /></p>
    </form>
<?php
$val1 = $_POST['n1'];
$val2 = $_POST['n2'];

if (is_numeric($val1) && is_numeric($val2)) {
    $result = $val1 * $val2;
    echo "El área es: $result";
}
?>
</body>
</html>