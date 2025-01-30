<?php
echo "<h2>Index Array</h2>";

$fruits = array("apple", "banana", "cherry", "orange", "kiwi");
// print the array using fixed index in index array
echo "print the array using fixed index in index array <br>";
echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";
echo $fruits[4]."<br>";

// print the array using unordered list in index array
echo "<br> print the array using unordered list in index array <br>";
echo "<ul>";
echo "<li>".$fruits[0]."</li>";
echo "<li>".$fruits[1]."</li>";
echo "<li>".$fruits[2]."</li>";
echo "<li>".$fruits[3]."</li>";
echo "<li>".$fruits[4]."</li>";
echo "</ul>";

// print the array using for loop in index array
echo "<br> print the array using for loop in index array <br>";
for($i = 0; $i < count($fruits); $i++){
    echo $fruits[$i]."<br>";
}


echo "<h2>Associative Array</h2>";
$students_ages = array("Alice" => 20, "Bob" => 30, "Charlie" => 40);
// print the array using fixed index in associative array
echo "print the array using fixed index in associative array <br>";
echo $students_ages["Alice"]."<br>";
echo $students_ages["Bob"]."<br>";
echo $students_ages["Charlie"]."<br>";

// print the array using unordered list in associative array
echo "<br> print the array using unordered list in associative array <br>";
echo "<ul>";
echo "<li>".$students_ages["Alice"]."</li>";
echo "<li>".$students_ages["Bob"]."</li>";
echo "<li>".$students_ages["Charlie"]."</li>";
echo "</ul>";


// print the array using forEach loop in index array
echo "<br> print the array using forEach loop in index array <br>";
foreach($fruits as $fruit){
    echo $fruit."<br>";
}


// print the array using forEach loop in associative array
echo "<br> print the array using forEach loop in associative array <br>";
foreach($students_ages as $student => $age){
    echo $student." is ".$age." years old.<br>";
}



?>