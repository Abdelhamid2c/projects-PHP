<?php require "config.php";


  $select = $conn->query('SELECT * FROM urls');
  $select->execute();

  $rows = $select->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous" />
    <style>
      body {
        overflow: hidden;
      }

      .margin {
        margin-top: 200px;
      }
    </style>
  </head>
  <body>
    <div class="conatiner">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <form class="card p-2 margin" method="POST" action="insert.php">
            <div class="input-group">
              <input name="url" type="text" class="form-control" placeholder="your url" />
              <div class="input-group-append">
                <button name="submit" type="submit" class="btn btn-success">Shorten</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="conatiner" id="refresh">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">long url</th>
                <th scope="col">short url</th>
                <th scope="col">clicks</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($rows as $row): ?>
              <tr>
                <th scope="row"><?php echo $row->url ; ?></th>
                <td><a  href="http://localhost/projects%20PHP/URL%20shortening%20Service/u?id=<?php echo $row->id ; ?>" target="_blank" >http://localhost/projects%20PHP/URL%20shortening%20Service/u?id=<?php echo $row->id ; ?></a></td>
                <td><?php echo $row->click ; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        //refrech when you click on the lien
        $("#refresh").click(function(){
          setInterval(function(){
            $("body").load("index.php")
          },2000);
        })
     })
    </script>
  </body>
</html>
