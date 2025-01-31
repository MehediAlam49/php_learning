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

// Multidimensional Index Array
echo "<h2>Multidimensional Index Array</h2>";
$books = [
    ["The Great Gatsby", "F. Scott Fitzgerald", 1925],
    ["To Kill a Mockingbird", "Harper Lee", 1960],
    ["1984", "George Orwell", 1949],
    ["Pride and Prejudice", "Jane Austen", 1813],
    ["The Catcher in the Rye", "J.D. Salinger", 1951]
];

// Print this Multidimensional Index Array using fixed index
echo "Print this Multidimensional Index Array using fixed index <br>";
echo $books[0][0]."<br>";
echo $books[0][1]."<br>";
echo $books[0][2]."<br>";
echo $books[1][0]."<br>";
echo $books[1][1]."<br>";
echo $books[1][2]."<br>";


// Print this Multidimensional Index Array using for loop
echo "<br> Print this Multidimensional Index Array using for loop <br>";
for($i = 0; $i < count($books); $i++){
    for($j = 0; $j < count($books[$i]); $j++){
        echo $books[$i][$j]."<br>";
    }
}


// Print this Multidimensional Index Array using forEach loop
echo "<br> Print this Multidimensional Index Array using forEach loop <br>";
foreach($books as $book){
    foreach($book as $detail){
        echo $detail."<br>";
    }
}

// Print this Multidimensional Index Array using forEach loop in a table
echo "<br> Print this Multidimensional Index Array using forEach loop in a table <br>";
echo "<table border='2' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Title</th><th>Author</th><th>Year</th></tr>";
foreach($books as $book){
    echo "<tr>";
    foreach($book as $detail){
        echo "<td>".$detail."</td>";
    }
    echo "</tr>";
}
echo "</table>";


// Multidimensional Associative Array
echo "<h2>Multidimensional Associative Array</h2>";
$students_results = [
    "Alice" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Bob" => ["Math" => 90, "English" => 88, "Science" => 95],
    "Charlie" => ["Math" => 80, "English" => 85, "Science" => 90]
];

// Print this Multidimensional Associative Array using forEach loop
echo "<br> Print this Multidimensional Associative Array using forEach loop <br>";
foreach($students_results as $student => $results){
    echo $student.":<br>";
    foreach($results as $subject => $score){
        echo $subject.": ".$score."<br>";
    }
}

// Print this Multidimensional Associative Array using forEach loop in a table
echo "<br> Print this Multidimensional Associative Array using forEach loop in a table <br>";
echo "<table border='2' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Student</th><th>Subject</th><th>Score</th></tr>";
foreach($students_results as $student => $results){
    foreach($results as $subject => $score){
        echo "<tr>";
        echo "<td>".$student."</td>";
        echo "<td>".$subject."</td>";
        echo "<td>".$score."</td>";
        echo "</tr>";
    }
}
echo "</table>";



// Multidimensional Array forEach loop with list
echo "<h2>Multidimensional Array forEach loop with list</h2>";
$colors = [
    ["red", "green", "blue"],
    ["yellow", "orange", "purple"],
    ["pink", "black", "white"]
];
foreach($colors as list($color1, $color2, $color3)){
    echo $color1.", ".$color2.", ".$color3."<br>";
}

// Multidimensional Array forEach loop with list in a table
echo "<br> Multidimensional Array forEach loop with list in a table <br>";
echo "<table border='2' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Color 1</th><th>Color 2</th><th>Color 3</th></tr>";
foreach($colors as list($color1, $color2, $color3)){
    echo "<tr>";
    echo "<td>".$color1."</td>";
    echo "<td>".$color2."</td>";
    echo "<td>".$color3."</td>";
    echo "</tr>";
}
echo "</table>";


// Search a value in an array using in_array() function
echo "<h2>Search a value in an array using in_array() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
if(in_array("apple", $fruits)){
    echo "apple is present in the array.<br>";
}else{
    echo "apple is not present in the array.<br>";
}


// Search a value in an array using array_search() function
echo "<h2>Search a value in an array using array_search() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
$index = array_search("apple", $fruits);
if($index !== false){
    echo "apple is present in the array at index ".$index."<br>";
}else{
    echo "apple is not present in the array.<br>";
}


// Replace a value in an array using array_replace() function
echo "<h2>Replace a value in an array using array_replace() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
$new_fruits = ["Mango", "watermelon", "grape"];
$fruits = array_replace($fruits, $new_fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

// Replace a Multidimensional array value in an array using array_replace_recursive() function
echo "<h2>Replace a Multidimensional array value in an array using array_replace_recursive() function</h2>";
$fruits = [
    ["apple", "banana", "cherry"],
    ["orange", "kiwi", "grape"]
];
$new_fruits = [
    ["Mango", "watermelon", "grape"],
    ["apple", "banana", "cherry"]
];
$fruits = array_replace_recursive($fruits, $new_fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";


// Add a value in an array using array_push() function
echo "<h2>Add a value in an array using array_push() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_push($fruits, "Mango", "watermelon", "grape");
echo "<pre>";
print_r($fruits);
echo "</pre>";


// Remove a value in an array using array_pop() function
echo "<h2>Remove a value in an array using array_pop() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_pop($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";


// Remove a value in an array using array_shift() function
echo "<h2>Remove a value in an array using array_shift() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_shift($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

// Add a value in an array using array_unshift() function
echo "<h2>Add a value in an array using array_unshift() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_unshift($fruits, "Mango", "watermelon", "grape");
echo "<pre>";
print_r($fruits);
echo "</pre>";


// Join an array using array_merge() function
echo "<h2>Join an array using array_merge() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
$new_fruits = ["Mango", "watermelon", "grape"];
$fruits = array_merge($fruits, $new_fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

// Join an array using array_merge_recursive() function
echo "<h2>Join an array using array_merge_recursive() function</h2>";
$fruits = [
    ["apple", "banana", "cherry"],
    ["orange", "kiwi", "grape"]
];
$new_fruits = [
    ["Mango", "watermelon", "grape"],
    ["apple", "banana", "cherry"]
];
$fruits = array_merge_recursive($fruits, $new_fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

// Join an array using array_combine() function
echo "<h2>Join an array using array_combine() function</h2>";
$names = ["Alice", "Bob", "Charlie"];
$ages = [25, 30, 35];
$students = array_combine($names, $ages);
echo "<pre>";
print_r($students);
echo "</pre>";

// Extract a portion of an array using array_slice() function
echo "<h2>Extract a portion of an array using array_slice() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
$fruits = array_slice($fruits, 1, 3);
echo "<pre>";
print_r($fruits);
echo "</pre>";

// Remove a portion of an array using array_splice() function
echo "<h2>Remove a portion of an array using array_splice() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_splice($fruits, 1, 3);
echo "<pre>";
print_r($fruits);
echo "</pre>";


// Replace a portion of an array using array_splice() function
echo "<h2>Replace a portion of an array using array_splice() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_splice($fruits, 1, 3, ["Mango", "watermelon", "grape"]);
echo "<pre>";
print_r($fruits);
echo "</pre>";

// Insert without deleting a portion of an array using array_splice() function
echo "<h2>Insert without deleting a portion of an array using array_splice() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
array_splice($fruits, 1, 0, ["Mango", "watermelon", "grape"]);
echo "<pre>";
print_r($fruits);
echo "</pre>";


// Find a key in an array using array_keys() function
echo "<h2>Find a key in an array using array_keys() function</h2>";
$fruits = ["apple", "banana", "cherry", "orange", "kiwi"];
$keys = array_keys($fruits);
echo "<pre>";
print_r($keys);
echo "</pre>";


// Find a first key in an associative array using array_key_first() function
echo "<h2>Find a first key in an associative array using array_key_first() function</h2>";
$fruits = ["apple" => "red", "banana" => "yellow", "cherry" => "red", "orange" => "orange", "kiwi" => "green"];
$first_key = array_key_first($fruits);
echo "<pre>";
print_r($first_key);
echo "</pre>";

// Find a last key in an associative array using array_key_last() function
echo "<h2>Find a last key in an associative array using array_key_last() function</h2>";
$fruits = ["apple" => "red", "banana" => "yellow", "cherry" => "red", "orange" => "orange", "kiwi" => "green"];
$last_key = array_key_last($fruits);
echo "<pre>";
print_r($last_key);
echo "</pre>";


// Find an associative array keys exist using array_key_exists() function
echo "<h2>Find an associative array keys exist using array_key_exists() function</h2>";
$fruits = ["apple" => "red", "banana" => "yellow", "cherry" => "red", "orange" => "orange", "kiwi" => "green"];
if(array_key_exists("apple", $fruits)){
    echo "apple is present in the array.<br>";
}else{
    echo "apple is not present in the array.<br>";
}


// Find a common values in two associative arrays using array_intersect() function
echo "<h2>Find a common values in two associative arrays using array_intersect() function</h2>";
$fruits1 = ["apple" => "red", "banana" => "yellow", "cherry" => "red", "orange" => "orange", "kiwi" => "green"];
$fruits2 = ["apple" => "red", "grape" => "green", "watermelon" => "red", "lemon" => "orange", "kiwi" => "green"];
$common_fruits = array_intersect($fruits1, $fruits2);
echo "<pre>";
print_r($common_fruits);
echo "</pre>";


// Find a common keys in two associative arrays using array_intersect_key() function
echo "<h2>Find a common keys in two associative arrays using array_intersect_key() function</h2>";
$fruits1 = ["apple" => "red", "banana" => "yellow", "cherry" => "red", "orange" => "orange", "kiwi" => "green"];
$fruits2 = ["apple" => "red", "grape" => "green", "watermelon" => "red", "lemon" => "orange", "kiwi" => "green"];
$common_fruits = array_intersect_key($fruits1, $fruits2);
echo "<pre>";
print_r($common_fruits);
echo "</pre>";

// Find a common keys and values in two associative arrays using array_intersect_assoc() function
echo "<h2>Find a common keys and values in two associative arrays using array_intersect_assoc() function</h2>";
$fruits1 = ["apple" => "red", "banana" => "yellow", "cherry" => "red", "orange" => "orange", "kiwi" => "green"];
$fruits2 = ["apple" => "red", "grape" => "green", "watermelon" => "red", "lemon" => "orange", "kiwi" => "green"];
$common_fruits = array_intersect_assoc($fruits1, $fruits2);
echo "<pre>";
print_r($common_fruits);
echo "</pre>";


?>