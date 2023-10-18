<!DOCTYPE html>

<head>
    <title>Lab7: PHP and SQL Response</title>

    <?php
        $book_name = htmlspecialchars ($_POST["bookname"]);
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
    ?>
</head>

<body>

<body style="background-color:gray;">
 

<h1> Task 3.3 (content of array get and post) </h1>

<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_POST) ?></p>

<h1> Response of selection </h1>

You chosed the book: <?= $id ?>. <br/>
<?php
    foreach($result as $row) 
    { 
        echo "{$row['author']} authored {$row['book_name']}\n <br>";
    }
    mysqli_close($conn);
    ?>
<p> Hello <?= htmlspecialchars($_POST['peoplename']) ?></p>
<p> The name of book entered was: <?= htmlspecialchars($_POST['book_name']) ?></p>
<p> The genre of the book entered was: <?= htmlspecialchars($_POST['genretype']) ?></p>

</body>