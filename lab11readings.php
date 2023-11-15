<!DOCTYPE html>

<head>
    <title>Lab11 readings - Tran</title>
</head>
<body style="background-color:gray;">
<?php 
    $raw = `./bme280`;   
    $deserialized = json_decode($raw, true); 

    echo "temperature = {$deserialized["temperature"]} <br>"; 
    echo "pressure =  {$deserialized["pressure"]} <br>";
    echo "altitude =  {$deserialized["altitude"]} <br>"; 
?>
</body>