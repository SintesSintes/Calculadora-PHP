<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="POST">
        <p>numero1</p><input type="number" name="numero1" required><br><br>
        <p>numero2</p><input type="number" name="numero2" required><br><br>
        <p>Operación</p>
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        if ($operacion == 'suma') {
            $resultado = $numero1 + $numero2;
        } elseif ($operacion == 'resta') {
            $resultado = $numero1 - $numero2;
        } elseif ($operacion == 'multiplicar') {
            $resultado = $numero1 * $numero2;
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>
