<!DOCTYPE html>

<head>
    <title>Lab5:Intro to PHP - Tran</title>
</head>

<body>

<body style="background-color:gray;">

<p> Hello, welcome to Lab 5 </p>
 
<h1> Task 3.2.5 (User Agent) </h1>
<p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>

<form>
    <br>
    <label for="genre">Genre:</label>
    <input type="text" restrict onblur="field()" id="genre" pattern="(fantasy|modern|mystery|sci-fi)">  
    <input type="submit">
    <p id="required" style="display:none;">This field is required</p>                     
</form>

</body>