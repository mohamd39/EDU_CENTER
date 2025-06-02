<?php

$dsn= 'mysql:host=localhost;dbname=EDU_CENTER_web_site';
$user = 'root';
$pass = '';

try{
    $db = new PDO($dsn ,$user ,$pass); //start new connetion with PDO
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'You are connected ';
    $q = "INSERT INTO items (name) VALUES ('users')";

}

catch(PDOException $e){

echo 'Faild' .$e->getMessage();
}