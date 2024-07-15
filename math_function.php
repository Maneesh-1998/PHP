<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <?php
    
    #square root
    $number_1=100;
    $number_1=sqrt($number_1);
    echo $number_1;
    echo "<br>";
    echo "<br>";

    #round
    $number_2=3.1;
    $number_2=round($number_2);
    echo $number_2;
    echo "<br>";
    echo "<br>";


    #rounding with precision
    $number_3=3.82345678;
    $number_3=round($number_3);
    echo $number_3;
    echo "<br>";
    echo "<br>";

    #round towards max
    $number_4=3.7;
    $number_4=ceil($number_4);
    echo $number_4;
    echo "<br>";
    echo "<br>";


    #round to mini
    $number_5=5.9;
    $number_5=floor($number_5);
    echo $number_5;
    echo "<br>";
    echo "<br>";

    #non-negative value
    $number_6=-6.7;
    $number_6=abs($number_6);
    echo $number_6;
    echo "<br>";
    echo "<br>";


    #decimal to binary
    $number_7=2;
    $number_7=decbin($number_7);
    echo $number_7;
    echo "<br>";
    echo "<br>";

    #binary to decimal
    $number_8=1111101000;
    $number_8=bindec($number_8);
    echo $number_8;
    echo "<br>";
    echo "<br>";

    #random number
    $number_9=rand();
    echo $number_9;
    echo "<br>";
    echo "<br>";


    #random number with precison
    $number_10=rand(0,100);
    echo $number_10;
    echo "<br>";
    echo "<br>";


    ?>
</body>
</html>