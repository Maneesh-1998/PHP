<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
<form action="get&post_advanced.php" method="GET">
        <label for="name">enter your name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="pass">enter password</label><br>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit">
    </form>
    <?php
    $name=$_GET["name"];
    $pass=$_GET["pass"];
    echo "your have entered your details";
    ?>
    <form action="get&post_advanced.php" method="POST">
        <label for="name">enter your name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="pass">enter password</label><br>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit">
    </form>
    <?php
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    echo "your have entered your details";
    ?>
</body>
</html>