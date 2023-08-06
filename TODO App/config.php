<?php 
    
    try{
        $hostname = "localhost";
        $dbname = "todosApp";
        $user ="root";
        $password = "";

        $conn = new PDO("mysql:host=$hostname;dbname=$dbname",$user,$password);

        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){

        echo "error is : ".$e->getMessage();
    }

?>