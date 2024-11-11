<?php

// Declare 2D array
$array = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

// Print the array
echo "Original Array:<br>";
foreach ($array as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo "<br>";
}


// Pattern 1
echo "Pattern 1:<br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

// Pattern 2
echo "Pattern 2:<br>";
$char = 'A';
$num = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $char++ . " ";
    }
    echo "<br>";
}


?>