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
//collect form data
$name=_POST['name'];
$email=_POST['email'];
$phone=_POST['phone'];

$sql="INSERT INTO conatct(name,email,phone) VALUES('$name','$email','$phone')";

if(mysqli_query($connection,$sql)){
    echo "Record Inserted";
}else{
    echo "Record not Inserted";
}
mysqli_close($connection);

?>