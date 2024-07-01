<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            width: 300px;
            text-align: center;
        }
        h2 {
            color: #fff;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }
        input[type="number"], select {
            padding: 8px;
            width: calc(100% - 16px);
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #555;
            color: #fff;
        }
        input[type="submit"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 3px;
        }
     
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculadora</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="num1">Primeiro:</label>
            <input type="number" id="num1" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>" required><br><br>
            <label for="num2">Segundo:</label>
            <input type="number" id="num2" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>" required><br><br>
            <label for="operacion">Operação:</label>
            <select id="operacion" name="operacion">
                <option value="+" <?php echo isset($_POST['operacion']) && $_POST['operacion'] == '+' ? 'selected' : ''; ?>>+</option>
                <option value="-" <?php echo isset($_POST['operacion']) && $_POST['operacion'] == '-' ? 'selected' : ''; ?>>-</option>
                <option value="x" <?php echo isset($_POST['operacion']) && $_POST['operacion'] == 'x' ? 'selected' : ''; ?>>×</option>
                <option value="÷" <?php echo isset($_POST['operacion']) && $_POST['operacion'] == '÷' ? 'selected' : ''; ?>>÷</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                    if($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Erro: divisão por zero";
                    }
                    break;
                
                default:
                    $resultado = "Operação inválida";
                    break;
            }

            echo "<br><strong>Resultado:</strong> ".$resultado;
        }
        ?>
        <p>&copy; 2023 Daniel Lucena</p>
    </div>

</body>
</html>
