<?php


   require "config.php";

  if(isset($_GET['up_id'])) {

  	$id = $_GET['up_id'];

  	$data = $conn->query("SELECT * FROM tasks WHERE id = '$id'");

    $rows = $data->fetch(PDO::FETCH_OBJ);

    echo $rows->name ;


  	if(isset($_POST["submit"])) {
   
   		$task = $_POST['mytask'];

   	    $update = $conn->prepare("UPDATE tasks SET name = :name WHERE id = '$id'");

   	    $update->execute([':name' => $task]);
   
        header("location: index.php");
   	
   } 
  }

?>


<form method="POST" action="update.php?up_id=<?php echo $id; ?>" class="form-inline" id="user_form">
		 
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">create</label>
		    <input name="mytask" type="text" class="form-control" id="task" placeholder="enter task" value="<?php echo $rows->name; ?>">
		  </div>
		  <input type="submit" name="submit" class="btn btn-primary" value="update" />
</form>
