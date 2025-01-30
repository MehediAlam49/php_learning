<?php
echo "<h1>Arrays</h1>";

$fruits = array("apple", "banana", "cherry", "orange", "kiwi");
// print the array using fixed index in index array
echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";
echo $fruits[4]."<br>";

// print the array using unordered list in index array
echo "<ul>";
echo "<li>".$fruits[0]."</li>";
echo "<li>".$fruits[1]."</li>";
echo "<li>".$fruits[2]."</li>";
echo "<li>".$fruits[3]."</li>";
echo "<li>".$fruits[4]."</li>";
echo "</ul>";
?>