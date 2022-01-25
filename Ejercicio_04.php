<html>
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">    
        <h1>Ejercicio 4:</h1>
        <h2>Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.</h2>
    </head>
    <body>
        <?php 
        echo "<form action='Ejercicio_04.php' method='post'>
        <p>Sumar: <input type='text' name='S1' id='S' size='1'> + <input type='text' name='S2' id='S2' size='1'> =  </p>"; echo $result;
        echo "<p>Resta: <input type='text' name='R1' id='R1' size='1'> - <input type='text' name='R2' id='R2' size='1'></p>";
        echo "<p>Multiplicacion: <input type='text' name='M1' id='M1' size='1'> x <input type='text' name='M2' id='M2' size='1'></p>";
        echo "<p>Division: <input type='text' name='D1' id='D1' size='1'> / <input type='text' name='D2' id='D2' size='1'></p>";
        echo "<p><input type='submit'/></p>
        </form>";
        $val1 = $_POST['S1'];
        $val2 = $_POST['S2'];
        $val3 = $_POST['R1'];
        $val4 = $_POST['R2'];
        $val5 = $_POST['M1'];
        $val6 = $_POST['M2'];
        $val7 = $_POST['D1'];
        $val8 = $_POST['D2'];
        
        if (is_numeric($val1) && is_numeric($val2)) {
            $resultS = $val1 + $val2;    
            echo "El resultado de la suma es: $resultS"; echo "</br>";    
        }
        if (is_numeric($val3) && is_numeric($val4)) {
            $resultR = $val3 - $val4;
            echo "El resultado de la Resta es: $resultR"; echo "</br>"; 
        }
        if (is_numeric($val5) && is_numeric($val6)) {
            $resultM = $val5 * $val6;
            echo "El resultado de la Multiplicacion es: $resultM"; echo "</br>"; 
        }
        if (is_numeric($val7) && is_numeric($val8)) {
            $resultD = $val7 / $val8;
            echo "El resultado de la Division es: $resultD"; echo "</br>"; 
        }
        ?>
    </body>
</html>