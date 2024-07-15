<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
<form action="elseif.php" method="POST">
        <label for="num1">enter a number</label><br>
        <input type="number" name="num1" id="num1"><br>
        <input type="submit">
    </form>
    <?php
    $num1=$_POST["num1"];
    if($num1>0){
        echo "it is a positive number";
    }
    else if($num1<0){
        echo "it is a negative number";
    }else{
        echo "it is zero";
    }
    ?>
</body>
</html>