<html>
    <head>
        <title>Ejercicio 10</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 10:</h1>
        <h2>Realiza un conversor de Mb a Kb.</h2>
    </head>
    <body>
<?php
echo "
<form action='Ejercicio_10.php' method='post'>
<p>Mb:<input type='text' name='Mb' id='N'></p>
<p><input type='submit' /></p>
</form>
</body>";
$Mb = $_POST['Mb'];
$conversor = "1000";
$Kb = $Mb * $conversor;
echo "El resultado es $Kb Kb"
?>
    </body>
</html>