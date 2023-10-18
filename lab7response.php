<!DOCTYPE html>

<head>
    <title>Lab7: PHP and SQL Response</title>

    <?php
        $book_name
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

<h1> Task 3.3.5 (User friendly way) </h1>

<p> Hello <?= htmlspecialchars($_POST['peoplename']) ?></p>
<p> The name of book entered was: <?= htmlspecialchars($_POST['book_name']) ?></p>
<p> The genre of the book entered was: <?= htmlspecialchars($_POST['genretype']) ?></p>

</body>