<?php 
    
    require "config.php";
    echo $_POST['submit'];
    if(isset($_POST['submit'])){
        $task = $_POST['mytask'];

        $insert = $conn ->prepare("INSERT INTO tasks (name) VALUES (:name)");
        $insert->execute([':name' => $task]);
    }
    header("location:index.php");
?>