<?php

$connection = new mysqli('localhost', 'root', '', 'Bank');
$sql = 'SELECT first_name, last_name, balance FROM Clients';

if ($connection) {
    $answer = $connection->query($sql); //query = send
    while ($row = $answer->fetch_assoc()) {
        //echo $row["first_name"] . "<br>";
        //echo $row["last_name"]  . "<br>";
        //echo $row["balance"]  . "<br>";
    }
    $number_of_rows = $answer->num_rows;
    for ($i = 0; $i < $number_of_rows; $i++) {
        $row = $answer->fetch_assoc();
        echo $row["first_name"] . "<br>";
        echo $row["last_name"]  . "<br>";
        echo $row["balance"]  . "<br>";
    }
}

//==================================================================================================================================================

$currentTime = date("G", mktime(22));
if ($currentTime > 2 && $currentTime < 20) {
    echo "Goodmorning!";
} else {
    echo "Goodevening!";
}

$a = 1;
while ($a <= 10) {
    echo $a++;
}

$a = 1;
do {
    echo $a++;
} while ($a <= 10);

for ($i = 0; $i < 10; $i++) {
    echo "This will loop 10 times!";
}

$price = 90;
if ($price < 100) {
    echo $price * 4;
} else if ($price > 200 && $price < 100) {
    echo $price * 3;
} else {
    echo (pow($price, 4) . "<br>");
}

$numbers = [];
for ($i = 1; $i <= 100; $i++) {
    $numbers[] = $i;
}
for ($i = 0; $i  <  count($numbers); $i++) {
    $even_counter = 0;
    $odd_counter = 0;
    if ($numbers[$i] % 2 == 0) {
        $even_counter++;
    } else {
        $odd_counter++;
    }
}


//==================================================================================================================================================



for ($i = 10; $i < 50; $i++) {
    echo $i . " ";
}


for ($i = 10; $i >= 0; $i++) {
    echo "$i\n";
}

$i = 0;
while ($i <= 10) {
    echo "$i \n";

    $i++;
}
$i = 20;
do {
    echo "$i \n";
    $i++;
} while ($i <= 10);

$array = ['1', 2, 6, 7, 3];
$lenght = count($array);

for ($i = 0; $i < $lenght; $i++) {
    echo $array[$i] . "\n";
}
$array = ['1', 2, 6, 9, 3];

foreach ($array as $value) {
    switch ($value) {
        case is_int($value):
            echo "int\n";
            break;
        case is_string($value):
            echo "string\n";
            break;
    }
}

$users = ['name' => 'Paul', 'age' => 18, 'eye' => 'blue'];

foreach ($users as $key => $value) {
    echo $key . " " . $value . "\n";
}
$i = 0;
$array = [1, 2, 6, 7, 3];
while ($i < count($array)) {
    echo $array[$i] . "\n";
    $i++;
}


//==================================================================================================================================================