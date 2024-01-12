<!DOCTYPE html>

<head>
    <title>Finals - Tran</title>

</head>

<body>
    <h1> Finals</h1>

    <p><?= $_SERVER['REMOTE_ADDR'] ?></p>

    <form action="query.php" method = "get">
        <p> Enter your search: <input type="text" id="search" name="search" /></p> 
        <input type="submit"/> 
    </form>
    
</body>