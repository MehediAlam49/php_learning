<?php
// boolean
$isCompleted = true;
if($isCompleted):
    echo "Task is completed";
else:
    echo "Task is not completed";
endif;

echo "<br> <br>";

// integer
$age = 20;
echo "The maximum value for integer is " . PHP_INT_MAX . "<br>";
var_dump($age);

echo "<br> <br>";

// float
$pi = 3.14;
echo "The maximum value for float is " . PHP_FLOAT_MAX . "<br>";
var_dump($pi);

echo "<br> <br>";

// Heredoc
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo $fullName;

echo "<br> <br>";

// Nowdoc
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo <<<EOT
    $fullName
EOT;

?>