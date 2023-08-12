<?php require "../config.php";?>

<?php 

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $select = $conn->prepare('SELECT * FROM urls WHERE id=:id');
        $select->execute([
            ':id'=>$id
        ]);

        $data = $select->fetch(PDO::FETCH_OBJ);

        $url = $data->url;

        $click = $data->click;
        $click = $click+1;

        $update = $conn->prepare('UPDATE urls SET click=:click WHERE id=:id');
        $update->execute([
            ':click'=>$click,
            ':id'=>$id
        ]);

        header("location: $url");
    }

?>