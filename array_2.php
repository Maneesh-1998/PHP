<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <?php
    #array using forloop
    $fruits=array("banana","grapes","orange","kiwi");
    echo count($fruits);
    echo "<br>";
    for($i=0;$i<count($fruits);$i++){
        echo $fruits[$i];
        echo "<br>";
    }
    ?>
</body>
</html>