<!DOCTYPE html>
<html>
<head>
    <title>Lab7: PHP and SQL Response</title>
    <h1> Task 3.3 (content of array get and post) </h1>

    <?php
        $book_name = (int)($_GET["bookname"]);
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

        $sql = "select stuff, stuff and more stuff={$book_name};";
        $result = mysqli_query($conn, $sql);
    ?>

</head>

<body>

<body style="background-color:gray;">
 



<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_POST) ?></p>

<h1> Response of selection </h1>

You chosed the book: <?= $book_name ?>. <br/>
<?php
    foreach($result as $row) 
    { 
        echo "{$row['author']} authored {$row['book_name']}\n <br>";
    }
    mysqli_close($conn);
    ?>

</body>
</html>