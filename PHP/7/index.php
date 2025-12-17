<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Генератор паролей</title>
</head>
<body>
    <?php
    function generatePassword($length) {
        $chars = array_merge(
            range('a', 'z'),
            range('A', 'Z'),
            range('0', '9')
        );
        $chars = implode('', $chars);
        $shuffled = str_shuffle($chars);
        return substr($shuffled, 0, $length);
    }

    echo "<p>Сгенерированный пароль: " . htmlspecialchars(generatePassword(10)) . "</p>";
    ?>
</body>
</html>