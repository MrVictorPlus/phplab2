<?php
$a = 0;
$b = 0;

echo "<h3>Цикл for</h3>";
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
}

echo "Конец цикла: a = $a, b = $b<br><br>";

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

echo "Конец цикла: a = $a, b = $b<br><br>";

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

echo "Конец цикла: a = $a, b = $b";

?>
