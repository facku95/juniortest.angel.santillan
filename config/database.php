<?php
$host="localhost";
$db="test";
$user="root";
$pass="";

try {
    $conection=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    if($conection){echo "Conection success";}
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>