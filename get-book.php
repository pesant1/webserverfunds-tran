<!DOCTYPE html>

<head>
    <title>Lab5:Intro to PHP - Tran</title>
</head>

<body>

<body style="background-color:gray;">
 

<h1> Task 3.3 (content of array get and post) </h1>

<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_POST) ?></p>

<h1> Task 3.3.5 (User friendly way) </h1>

<p> Hello <?=htmlspecialchars($_GET['peoplename']) ?></p>
<p> The name of book entered was: <?=htmlspecialchars($_GET['book_name']) ?></p>
<p> The genre of the book entered was: <?=htmlspecialchars($_GET['genretype']) ?></p>

</body>