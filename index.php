<?php
$dayOfWeek = date('N');
    
function getSchedule($name) {
    global $dayOfWeek;

    if ($name === "John Styles") {
        return in_array($dayOfWeek, [1, 3, 5]) ? "8:00-12:00" : "Нерабочий день";
    } elseif ($name === "Jane Doe") {
        return in_array($dayOfWeek, [2, 4, 6]) ? "12:00-16:00" : "Нерабочий день";
    }
    return "Неизвестно";
}

echo "<table border='1'>";
echo "<tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>";
echo "<tr><td>1</td><td>John Styles</td><td>" . getSchedule("John Styles") . "</td></tr>";
echo "<tr><td>2</td><td>Jane Doe</td><td>" . getSchedule("Jane Doe") . "</td></tr>";
echo "</table>";

$a = 0;
$b = 0;

echo "<h3>Цикл for</h3>";
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
}

echo "End of the loop: a = $a, b = $b<br><br>";

echo "<h3>Цикл while</h3>";
$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
    $i++;
}

echo "End of the loop: a = $a, b = $b<br><br>";

echo "<h3>Цикл do-while</h3>";
$a = 0;
$b = 0;
$i = 0;

do {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
    $i++;
} while ($i <= 5);

echo "End of the loop: a = $a, b = $b";

?>
