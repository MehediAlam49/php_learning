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





?>