<html>
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 3:</h1>
        <h2>Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por teclado.</h2>
    </head>
    <body>
    <?php
echo "
<form action='Ejercicio_03.php' method='post'>
<p>Pesetas:<input type='text' name='n1' id='N'></p>
<p><input type='submit' /></p>
</form>
</body>";
$Pesetas = $_POST['n1'];
$conversor = "166,386";
$euros = $Pesetas / $conversor;
echo "El resultado es $euros euros"

?>
    </body>
</html>