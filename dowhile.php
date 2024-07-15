<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <form action="dowhile.php" method="POST">
        <label for="num1">enter a number</label><br>
        <input type="number" name="num1" id="num1"><br>
        <input type="submit">
    </form>
    <?php
    $num1=$_POST["num1"];
    $a=1;
    do{
        echo "$a<br>";
        $a++;
    }
    while($a<=$num1);
    ?>
</body>
</html>