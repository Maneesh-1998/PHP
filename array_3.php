<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <?php
    # associate array 
    $country=array("IN"=>"india","SL"=>"srilanka","UK"=>"united kingdom");
    echo count($country);
    echo "<br>";
    echo $country["IN"];
    echo "<br>";
    foreach($country as $c=>$c_value){
        echo $c,"=",$c_value;
        echo "<br>";
    }

    ?>
</body>
</html>