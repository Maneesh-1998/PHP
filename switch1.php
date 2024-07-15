<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
<form action="switch1.php" method="POST">
        <label for="num1">enter a number</label><br>
        <input type="text" name="num1" id="num1"><br>
        <input type="submit">
    </form>
    <?php
    $num1=$_POST["num1"];
    switch($num1){
        case "A":
            echo "Apple";
            break;
        case "B":
            echo "Bat";
            break;
        case "C":
            echo "Cat";
            break;
        default:
        echo "invalid ";
        break;            
    }
    ?>
</body>
</html>