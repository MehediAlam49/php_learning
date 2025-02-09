<?php
// insert view
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    

    // database connection
    require_once('database.php');

    // query database
    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', '$age', '$email')";
    $result = $connection->query($sql);
    print_r($sql);
    die();

    // check results
    if (!$result) {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }else{
        header("Location: index.php");
    }
}



// include insert view
include_once('views/insert.view.php');
?>