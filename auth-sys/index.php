<?php require "includes/header.php"; ?>



<?php 

    if(isset($_SESSION['username'])){
        echo "hello " . $_SESSION['username'] ;
    }else{
        echo "hello";
    }

?>
<?php require "includes/footer.php"; ?>
