<!DOCTYPE html>

<head>
    <title>Lab5:Intro to PHP - Tran</title>
</head>

<body>

<body style="background-color:gray;">

<p> Hello, welcome to Lab 5 </p>
 
<h1> Task 3.2.5 (User Agent) </h1>
<p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>

<h1> Task 3.3.5 (less of eyesore) </h1>
<form action="get-book.php" method = "get">
    <p> books name: <input type="text" name="book_name" /></p>   
    <p> books genre: <input type="text" name="genre_type" /></p>
      
    <div> Select your genre:<br />
    <label for="genre">genre:</label>
            <select id="genre">
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="modern">Modern</option>
            <option value="mystery">Mystery</option>
            </select>
    </div>

    <input type="submit"> 
</form>

</body>