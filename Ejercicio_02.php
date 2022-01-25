<html>
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 2:</h1>
        <h2>Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se deberá introducir por teclado.</h2>
    </head>
    <body>
<?php
echo "
<form action='Ejercicio_02.php' method='post'>
<p>Euros:<input type='text' name='n1' id='N'></p>
<p><input type='submit' /></p>
</form>
</body>";
$euros = $_POST['n1'];
$conversor = "166,386";
$pesetas = $euros * $conversor;
echo "El resultado es $pesetas pesetas"

?>
    </body>
</html>