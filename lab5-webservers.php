<!DOCTYPE html>

<head>
    <title>Lab5:Intro to PHP - Tran</title>
</head>

<body>

<body style="background-color:gray;">

<p> Hello, welcome to Lab 5 </p>
 
<h1> Task 3.2.5 (User Agent) </h1>
<p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>

<h1> Task 3.3 (Forms) </h1>
<form action="lab5-webservers.php" method = "post">
    <p> books name: <input type="text" name="book_name" /></p>   
    <p> books genre: <input type="text" genre="genre_type" /></p>
    <input type="submit">                    
</form>

</body>