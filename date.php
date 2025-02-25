<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>График работы</title>
</head>
<body>
    <?php 
    $dayOfWeek = date('N'); 

    function getSchedule($name, $dayOfWeek) {
        if ($name === "John Styles") {
            return in_array($dayOfWeek, [1, 3, 5]) ? "8:00-12:00" : "Нерабочий день";
        } elseif ($name === "Jane Doe") {
            return in_array($dayOfWeek, [2, 4, 6]) ? "12:00-16:00" : "Нерабочий день";
        }
        return "Неизвестно";
    }
    ?>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Фамилия Имя</th>
            <th>График работы</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Styles</td>
            <td><?php echo getSchedule("John Styles", $dayOfWeek); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Doe</td>
            <td><?php echo getSchedule("Jane Doe", $dayOfWeek); ?></td>
        </tr>
    </table>
</body>
</html>