<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сумма и чётность</title>
</head>
<body>
    <?php
    $num1 = 10;
    $num2 = 15;
    $sum = $num1 + $num2;
    echo "<p>Сумма: $sum</p>";
    if ($sum % 2 == 0) {
        echo "<p>Сумма — чётное число.</p>";
    } else {
        echo "<p>Сумма — нечётное число.</p>";
    }
    ?>
</body>
</html>