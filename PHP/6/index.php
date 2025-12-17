<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фильтрация товаров</title>
</head>
<body>
    <?php
    $products = [
        ['name' => 'Ручка', 'price' => 5, 'stock' => 100],
        ['name' => 'Ноутбук', 'price' => 1200, 'stock' => 10],
        ['name' => 'Блокнот', 'price' => 15, 'stock' => 50],
        ['name' => 'Мышь', 'price' => 45, 'stock' => 0],
        ['name' => 'Клавиатура', 'price' => 70, 'stock' => 20],
        ['name' => 'Карандаш', 'price' => 2, 'stock' => 200],
    ];

    $filtered = [];
    foreach ($products as $product) {
        if ($product['price'] < 50 && $product['stock'] > 0) {
            $filtered[] = $product;
        }
    }

    if (!empty($filtered)) {
        echo "<ul>";
        foreach ($filtered as $item) {
            echo "<li>" . htmlspecialchars($item['name']) . " — " . htmlspecialchars($item['price']) . " руб.</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Нет товаров, соответствующих условиям.</p>";
    }
    ?>
</body>
</html>