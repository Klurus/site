<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'] ?? '';
    $filePath = '/home/user/data.txt';  // Укажите путь к файлу

    // Сохраняем данные в файл
    file_put_contents($filePath, $data . PHP_EOL, FILE_APPEND);
    echo "Данные сохранены!";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сохранение данных</title>
</head>
<body>
    <form method="post">
        <label for="data">Введите данные:</label>
        <input type="text" name="data" id="data" required>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
