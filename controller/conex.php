<?php

try{
    $pdo=new PDO('mysql:host=localhost;dbname=tunek','root','');
    // echo "Conexión Exitosa!!!";
}catch(PDOException $e){
    print "ERROR".$e->getMessage()."<br>";
    die();
}






?>