<html>
    <head>
        <title>Ejercicio 8</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 8:</h1>
        <h2>Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora.</h2>
    </head>
    <body>
    <form action='Ejercicio_08.php' method='post'>
    <p>Horas trabajadas:<input type='text' name='Horas' id='N'></p>
    <p><input type='submit' /></p>
    </form>
<?php 
$Horas = $_POST['Horas'];
if (is_numeric($Horas)) {
    $Resultado = $Horas * 12;
    echo "El Total del salario semanal es $Resultado" ;
}
?>

</html>