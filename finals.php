<!DOCTYPE html>

<head>
    <title>Finals - Tran</title>

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
        $sql = "select * from finals;";
        $result = mysqli_query($conn, $sql);
    ?>

</head>

<body style="background-color:gray;">

<body>
    <h1> Finals</h1>

    <p><?= $_SERVER['REMOTE_ADDR'] ?></p>

    <form action="query.php" method = "get">
    <p> Enter your search: <input type="text" id="search" name="search" /></p> 
    <input type="submit"/> 
    <php
    $sql = "INSERT INTO finals (search, ip) VALUES ('$id', '$_SERVER['REMOTE_ADDR']');"
    mysqli_close($conn);        
    ?>  
    </form>
    
</body>