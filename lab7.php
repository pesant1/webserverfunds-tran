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
    ?>
</head>

<body>
    <body style="background-color:gray;">

    <h1> 4.2 Integrate SQL Funcitonality </h1>
    <br>
    <h1> Book search </h1>

    <form action="lab7response.php" method = "post">
        <p> Enter your name: <input type="text" id="name" name="peoplename" /></p> 
        <p> books name: <input type="text" id="bookname" name="book_name" /></p>   
        
        <div> Available books:<br/>
        <label for="genre">book:</label>
                <select id="bookname" name="namebook">
                <?php
                    foreach($result as $row) 
                    { 
                        echo "<option value='{$row["book_name"]}'\n <br>";
                    }
                    mysqli_close($conn);
                ?>
                </select>
                <br>
        </div>

        <input type="submit"> 
    </form>
</body>