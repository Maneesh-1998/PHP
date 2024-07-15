<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <?php
    $a=50;
    $b=10;
    $result_1=($a==50 && $b==10);
    echo var_dump($result_1);
    echo "<br>";
    $result_2=($a==50||$b==100);
    echo var_dump($result_2);
    echo "<br>";
    $result_3=($a!==50);
    echo var_dump($result_3);
    ?>
</body>
</html>