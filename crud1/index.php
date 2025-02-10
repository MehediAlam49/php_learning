<?php require_once('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD1</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <input type="text" name="first_name" placeholder="First Name"> <br><br>
            <input type="text" name="last_name" placeholder="Last Name"> <br><br>
            <input type="number" name="age" placeholder="Age"> <br><br>
            <input type="submit" value="Submit" name="submit_btn">
        </form>
    </div>



    <?php
        // insert data
        if (isset($_POST['submit_btn'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $age = $_POST['age'];

            $sql = "INSERT INTO student (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";

            $data =mysqli_query($con, $sql);

            if ($data) {
                ?>
                <script>
                    alert("Data inserted successfully");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Data not inserted");
                </script>
                <?php
            }
        }
    
    ?>


</body>

</html>