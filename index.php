<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Primeiro</label>
        <input type="number" name="num1" required><br><br>
        <label>Segundo</label>
        <input type="number" name="num2" required><br><br>
        <label>Operación: </label>
        <select name="operacion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="÷">÷</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            
            case '-':
                $resultado = $num1 - $num2;
                break;

            case 'x':
                $resultado = $num1 * $num2;
                break;
            
            case '÷':
                $resultado = $num1 / $num2;
                break;
            
            default:
                $resultado = "sem resultados";
                break;
        }

        echo "<br>Resultado: ".$resultado;
    }
    ?>
</body>
</html>
