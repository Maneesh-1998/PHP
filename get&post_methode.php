<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <form action="get&post_methode.php" method="GET">
        <label for="name">enter your name</label><br>
        <input type="text" name="name" id="name"><br>
        <input type="submit">
    </form>
    <?php
    $name=$_GET["name"];
    echo "your name is $name";
    ?>
    <form action="get&post_methode.php" method="POST">
        <label for="name">enter your name</label><br>
        <input type="text" name="name" id="name"><br>
        <input type="submit">
    </form>
    <?php
    $name=$_POST["name"];
    echo "your name is $name";
    ?>
</body>
</html>