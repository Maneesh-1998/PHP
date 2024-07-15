<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
</head>
<body>
    <?php
    $a=10;
    $b=20;
    $result_1=($a==$b);
    echo var_dump($result_1);

    echo "<br>";

    $c=10;
    $d="10";
    $result_2=($c===$d);
    echo var_dump($result_2);

    echo "<br>";

    $e=10;
    $f=20;
    $result_3=($e!=$f);
    echo var_dump($result_3);

    echo "<br>";

    $g=10;
    $h=20;
    $result_4=($g<>$h);
    echo var_dump($result_4);

    echo "<br>";

    $i=10;
    $j=20;
    $result_5=($i>$j);
    echo var_dump($result_5);

    echo "<br>";

    $k=10;
    $l=20;
    $result_6=($k<$l);
    echo var_dump($result_6);

    echo "<br>";

    $m=10;
    $n=20;
    $result_7=($m>=$n);
    echo var_dump($result_7);

    echo "<br>";

    $o=10;
    $p=20;
    $result_8=($o<=$p);
    echo var_dump($result_8);

    echo "<br>";
    
    ?>
</body>
</html>