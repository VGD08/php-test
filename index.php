<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <h1>Awo welkom op mijn website</h1>
    <h1><?php echo date(format:"M,d,Y") ?></h1>
    <form action="verwerk.php" method="POST">
        <label for="asd">voornaam</label>
        <input type="text" id="asd" name="voornaam">
        <input type="submit" value="verstuur">
    </form>

    <form action="bereken.php" method="get">
        <input type="number" name="num1" id="num1" required>
        <p>+</p>
        <input type="number" name="num2" id="num2" required>
        <input type="submit" name="button" value="add">

    </form>
    <fieldset><legend>een formulier met filter</legend>
    <form method="POST" action="form.php">
        <input type="text"name="naam" />
        <input type="submit" value="verzenden"/>

    </form>
    </fieldset>
</body>
</html>