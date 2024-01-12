<!DOCTYPE html>
<html>
<head>
    <title>Finals Response</title>

    <?php

        $ip = ($_SERVER['REMOTE_ADDR']); 
        $search = ($_GET["search"]);

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
 



<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_SERVER['REMOTE_ADDR']) ?></p>

<php
    $sql = "INSERT INTO finals (search, ip) VALUES ('{$search}', '{$ip}');";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);        
    ?>  



</body>
</html>