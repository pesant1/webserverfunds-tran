<!DOCTYPE html>

<head>
    <title>Lab5:Intro to PHP - Tran</title>
</head>

<body>

<body style="background-color:gray;">
 

<h1> Task 3.3 (Forms-get) </h1>
<form action="get-book.php" method = "get">
    <p> books name: <input type="text" name="book_name" /></p>   
    <p> books genre: <input type="text" genre="genre_type" /></p>
    <input type="submit">                    
</form>

<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_POST) ?></p>

</body>