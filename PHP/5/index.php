<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Первое число" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">−</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="num2" placeholder="Второе число" required>
        <button type="submit">Вычислить</button>
    </form>

    <?php
    if ($_POST) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;
        $error = null;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $error = "Ошибка: деление на ноль!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
        }

        if ($error) {
            echo "<p style='color: red;'>$error</p>";
        } elseif ($result !== null) {
            echo "<p>Результат: " . htmlspecialchars($result) . "</p>";
        }
    }
    ?>
</body>
</html>