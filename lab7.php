<!DOCTYPE html>

<head>
    <title>Lab7:PHP and SQL - Tran</title>

    <?php
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
        $sql = "select * from books;";
        $result = mysqli_query($conn, $sql);

        echo mysqli_num_rows($result);
        echo mysqli_error($conn);
    ?>
</head>

<body>
    <body style="background-color:gray;">

    <h1> 4.2 Integrate SQL Funcitonality </h1>
    <br>
    <h1> Book search </h1>

    <form action="get-book.php" method = "post">
        <p> Enter your name: <input type="text" id="name" name="peoplename" /></p> 
        <p> books name: <input type="text" id="bookname" name="book_name" /></p>   
        
        <div> Select your genre:<br />

        <label for="genre">genre:</label>
                <select id="genre" name="genretype">
                    <option value="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="modern">Modern</option>
                <option value="mystery">Mystery</option>

                <?php
                    foreach($result as $row) 
                    { 
                        echo "author: {$row["author"]} | book: {$row["book_name"]} | rating: {$row["rating"]}\n";
                    }
                    mysqli close($conn);
                ?>
                </select>
                <br>
        </div>

        <input type="submit"> 
    </form>
</body>