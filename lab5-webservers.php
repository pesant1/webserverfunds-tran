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