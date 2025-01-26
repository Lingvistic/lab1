<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вычисление процента</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Вычислить процент от заданного числа</h1>

        <!-- Форма для ввода данных -->
        <form method="post" action="">
            <div class="form-group">
                <label for="number">Введите число:</label>
                <input type="number" id="number" name="number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="percentage">Введите процент:</label>
                <input type="number" id="percentage" name="percentage" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Вычислить</button>
        </form>

        <?php
        // Обработка формы после отправки
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Получаем значения из формы
            $number = (float)$_POST['number'];
            $percentage = (float)$_POST['percentage'];

            // Вычисляем процент
            $result = ($percentage / 100) * $number;

            // Выводим результат
            echo "<div class='mt-4 alert alert-info'>{$percentage}% от {$number} равно {$result}</div>";
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>