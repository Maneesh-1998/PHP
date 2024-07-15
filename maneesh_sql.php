<?php
$host="localhost";
$user="root";
$pass="";
$database="maneesh_db";
$connection = mysqli_connect($host, $user,$pass, $database);
if($connection){
    echo "successfully connected <br>";
}else{
    echo ("could not connected");
}
$sql="INSERT INTO conatct(name,email,phone) VALUES('maneesh','maneesh@email.com','12345')";
mysqli_query($connection,$sql);
mysqli_close($connection);

?>