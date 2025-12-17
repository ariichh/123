<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пользователи</title>
</head>
<body>
    <?php
    $users = [
        [
            "name" => "Анна",
            "age" => 28,
            "city" => "Москва"
        ],
        [
            "name" => "Иван",
            "age" => 35,
            "city" => "Санкт-Петербург"
        ],
        [
            "name" => "Ольга",
            "age" => 22,
            "city" => "Новосибирск"
        ]
    ];

    foreach ($users as $user) {
        echo "<ul>";
        echo "<li>Имя: " . htmlspecialchars($user["name"]) . "</li>";
        echo "<li>Возраст: " . htmlspecialchars($user["age"]) . "</li>";
        echo "<li>Город: " . htmlspecialchars($user["city"]) . "</li>";
        echo "</ul>";
    }
    ?>
</body>
</html>