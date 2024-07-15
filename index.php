<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn PHP</title>
</head>
<body>
    <?php
    // this is a php programming
    echo("hello world"); 
    echo "<br>";
    echo "learn PHP";
    echo "<h1>learn PHP</h1>";
    //data type and variabes
    $text="hello world";
    $number=1000;
    $flNumber=1.675;
    $php=true;
    $var1=NULL;
    echo $text;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $flNumber;
    echo "<br>";
    echo $php;
    echo "<br>";
    echo $var1;
    echo "<br>";
    echo var_dump($text);
    echo "<br>";
    echo var_dump($number);
    echo "<br>";
    echo var_dump($flNumber);
    echo "<br>";
    echo var_dump($php);
    echo "<br>";
    echo var_dump($var1);
    echo "<br>";

    $name="maneesh kumar p";
    $age=28;
    echo "my name is $name<br>";
    echo "i am $age years old";

    //variables
    $texts="<h2>maneesh kumar p</h2>";
    echo $texts;
    echo "<br>";
    $texts="<h2>edneer</h2>";
    echo $texts;
    echo "<br>";
    //constant
    define ("PI",3.14);
    echo PI;
    ?>
</body>
</html>