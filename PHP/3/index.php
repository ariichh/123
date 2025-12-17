<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вывод чисел</title>
</head>
<body>
    <?php
    function printNumbers($start, $end) {
        for ($i = $start; $i <= $end; $i++) {
            echo $i . '<br>';
        }
    }

    printNumbers(1, 10);
    ?>
</body>
</html>