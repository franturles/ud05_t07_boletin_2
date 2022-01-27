<html>
    <head>
        <title>Ejercicio 11</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 11:</h1>
        <h2>Realiza un conversor de Kb a Mb.</h2>
    </head>
    <body>
<?php
echo "
<form action='Ejercicio_11.php' method='post'>
<p>Kb:<input type='text' name='Kb' id='N'></p>
<p><input type='submit' /></p>
</form>
</body>";
$Kb = $_POST['Kb'];
$conversor = "1000";
$Mb = $Kb / $conversor;
echo "El resultado es $Mb Mb"
?>
    </body>
</html>