<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <h1>Awo welkom op mijn website</h1>
    <h1><?php echo date(format:"M,d,Y") ?></h1>
    <form action="verwerk.php" method="GET">
        <label for="asd">voornaam</label>
        <input type="text" id="asd" name="voornaam">
        <input type="submit" value="verstuur">
    </form>
</body>
</html>