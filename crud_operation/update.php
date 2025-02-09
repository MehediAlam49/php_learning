<?php
if(isset($_POST['update'])){
    // database connection
    require_once('database.php');


    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $id = $_POST['id'];


    // query database
    $sql = "UPDATE students SET name = '$name', age = '$age', email = '$email' WHERE id = $id";

    // execute query and get results
    $result = $connection->query($sql);

    // check results
    if ($result) {
        header("Location: index.php");
        exit();
    }else{
        header('Location: edit.php?id=' .$id);
        exit();
    }

}






?>