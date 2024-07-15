<?php
$file=fopen("sample_1.txt",'a');
echo "file created";
fwrite($file,"learn c++\n");
echo "file written successfully";
fclose($file);