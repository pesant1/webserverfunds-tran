<!DOCTYPE html>

<head>
    <title>Lab11:GPIO - Tran</title>
</head>

<body>

<body style="background-color:gray;">

<p> Hello, welcome to Lab 11 </p>
 
<?php 
    $state =  $_POST["state"];

    if ($state == "toggle")
    {
        `gpio toggle 7`;
    }
    else if ($state == "1")
    {
        `gpio write 7 1`;
    }
    else if ($state == "0")
    {
        `gpio write 7 0`;
    }
?>


<p> On </p>
<form method="post">
    <input type="hidden" name="state" value="1"/> 
    <input type="submit" value="toggle"/> 
</form>

<p> Off </p>
<form method = "post">
    <input type="hidden" name="state" value="0"/> 
    <input type="submit" value="toggle"/> 
</form>

<p> Toggle </p>
<form method = "post">
    <input type="hidden" name="state" value="toggle"/> 
    <input type="submit" value="toggle"/> 
</form>

<p> get bme280 readings </p>
<form action="lab11readings.php" method = "post">
    <input type="hidden" name="stuff" value="reading"/> 
    <input type="submit" value="toggle"/>
    <?php
    $state =  $_POST["state"];

    if($stuff == "reading")
    {
        $raw = `/var/www/html/bme280`; 
        
        $deserialized = json_decode($raw, true);     
    }
    var_dump($deserialized); 
    ?>
</form>
</body>