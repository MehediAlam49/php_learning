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




?>