<!DOCTYPE html>

<head>
    <title>Lab7:PHP and SQL - Tran</title>
</head>
<body style="background-color:gray;">
<p><?php 
    $raw = `./bme280`;   
    $deserialized = json_decode($raw, true); 

echo "temperature = {$deserialized["temperature"]}" <br>; 
echo "pressure =  {$deserialized["pressure"]}" <br>;

echo "altitude =  echo $deserialized["altitude"]"<br>; 

?></p> 
</body>