<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $errors = [];
 
    if ($username == "") {
        $errors[] = "Name cannot be empty.";
    }
 

    $words = explode(" ", $username);
    $wordCount = 0;
    foreach ($words as $w) {
        if ($w != "") {
            $wordCount++;
        }
    }
    if ($wordCount < 2) {
        $errors[] = "Name must contain at least two words.";
    }
 
    $firstChar = $username[0];
    if (!(($firstChar >= 'A' && $firstChar <= 'Z') || ($firstChar >= 'a' && $firstChar <= 'z'))) {
        $errors[] = "Name must start with a letter.";
    }

    $isValid = true;
    for ($i = 0; $i < strlen($username); $i++) {
        $char = $username[$i];
        if (!(($char >= 'A' && $char <= 'Z') ||
              ($char >= 'a' && $char <= 'z') ||
              $char == ' ' ||
              $char == '.' ||
              $char == '-')) {
            $isValid = false;
            break;
        }
    }
    if (!$isValid) {
        $errors[] = "Name can only contain letters, periods, dashes, and spaces.";
    }
 
    if ($errors) {
        foreach ($errors as $e) {
            echo $e . "<br>";
        }
    } else {
        echo "Name is valid!";
    }
}
?>