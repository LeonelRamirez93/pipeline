<?php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'sumar':
            $result = $num1 + $num2;
            break;
        case 'restar':
            $result = $num1 - $num2;
            break;
        case 'multiplicar':
            $result = $num1 * $num2;
            break;
        case 'dividir':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: División por cero";
            }
            break;
        default:
            $result = "Operación no válida";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required>
        <br><br>
        <label for="operation">Operación:</label>
        <select name="operation" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Resultado: $result</h2>";
    }
    ?>
</body>

</html>