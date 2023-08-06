<?php 
    require "config.php";

    $data = $conn->query("SELECT * FROM tasks");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>Todo App</title>
    </head>
    
    <body>
        
    <h1>Todo App</h1>
   
            <form action="insert.php" method="post" > 
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="task" class="col-form-label">New Task</label>
                    </div>
                    <div class="col-auto">
                        <input name="mytask" type="text" class="form-control" id="task">
                    </div>
                    <div class="col-auto">
                        <button name="submit" type="submit" class="btn btn-primary mb-2">
                            create
                        </button>
                    </div>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Task name</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php while($rows = $data->fetch(PDO::FETCH_OBJ)) :
                       ?> 
                    <tr>
                        <th><?php echo $rows->id; ?></th>
                        <th><?php echo $rows->name; ?></th>
                        <th><a href="delete.php?del_id=<?php echo $rows->id; ?>" class="btn btn-danger">delete</a></th>
                        <th><a href="update.php?up_id=<?php echo $rows->id; ?>" class="btn btn-primary">update</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

    
    
    </body>
</html>