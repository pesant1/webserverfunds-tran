<!DOCTYPE html>

<head>
    <title>Lab7:PHP and SQL - Tran</title>

    <?php
        $server = "localhost";
        $username = "php";
        $password = "password1";
        $database = "books";
        $conn = mysqli_connect($server, $username, $password, $database);
        
        if (!$conn){
        die("Connection failed: {mysqli_connect_error()}");
        echo "Connected successfully";
        }
    ?>
</head>

<body>

<body style="background-color:gray;">

<p> 4.2 Integrate SQL Funcitonality </p>
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
            </select>
    </div>

    <input type="submit"> 
</form>

</body>