<!DOCTYPE html>
<html>
<head>
    <title>Finals Response</title>

    <?php
        $id = (int)($_GET["bookname"]);
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

        $sql = "select * from finals where id = {$id};";
        $result = mysqli_query($conn, $sql);
    ?>    

</head>

<body>

<body style="background-color:gray;">
 



<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_SERVER['REMOTE_ADDR']) ?></p>




</body>
</html>