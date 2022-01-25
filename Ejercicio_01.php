<html>
<?php
echo "<html>
<head>
    <title>Ejercicio 1</title>
    <meta charset='UTF-8'>    
</head>
<body>
    <h1>Ejercicio 1:</h1>
    <h2>Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.</h2>
<form action='Ejercicio_01.php' method='post'>
    <p>Numero uno:<input type='text' name='n1' id='N'></p>
    <p>Numero dos:<input type='text' name='n2' id='N'></p>
    <p><input type='submit' /></p>
    </form>
</body>
</html>";
$val1 = $_POST['n1'];
$val2 = $_POST['n2'];

if (is_numeric($val1) && is_numeric($val2)) {
    $result = $val1 * $val2;
    echo "El resultado es: $result";
}
?>
</html>