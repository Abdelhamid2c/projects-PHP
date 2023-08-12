<?php require "config.php";



  if(isset($_POST['submit'])){
    if(!$_POST['url']){
      echo "the input is empty";
    }else{
      $url = $_POST['url'];

      $insert = $conn ->prepare("INSERT INTO urls (url) VALUES (:url)");
      $insert->execute([':url' => $url]);
      header('Location: index.php');
    }
  }
  



?>