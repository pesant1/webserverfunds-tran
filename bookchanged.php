<!DOCTYPE html>
<html>
<head>
    <title>Lab7: PHP and SQL Response</title>


    <?php
        $id = (int)($_GET["book"]);
        $change =  (int)($_GET["rating"]); 
        $server = "localhost";
        $username = "php";
        $password = "password1";
        $database = "books";
        $conn = mysqli_connect($server, $username, $password, $database);

        //Connection checker
        if (!$conn)
        {
            die("Connection failed: {mysqli_connect_error()}");
            echo "Connected successfully";
        }


        $sql = "UPDATE books SET rating = {$change} where id={$id};";
        $result = mysqli_query($conn, $sql);

        $sql = "select * from  books where id = {$id};";
        $result = mysqli_query($conn, $sql);

    ?>

</head>

<body>

<body style="background-color:gray;">
 

<h1> The following book rating changed </h1>

You chosed the book: <?= $id ?>. <br/>
<?php
    foreach($result as $row) 
    { 
        echo "{$row['author']} authored {$row['book_name']}\n <br>";
    }
    mysqli_close($conn);
    ?>

</body>
</html>