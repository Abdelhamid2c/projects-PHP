<?php require "includes/header.php" ?>
<?php require "config.php" ?>
<?php 

if(!isset($_SESSION['username'])) {header("location:index.php");}

  if($_GET['id']){
    $id = $_GET['id'];


    $selectAll = $conn->query("SELECT * FROM images WHERE id!=$id ");
    $selectAll->execute();
    $rows = $selectAll->fetchAll(PDO::FETCH_OBJ);
    


    $select = "SELECT * FROM images WHERE id=$id";
    $select = $conn->query($select);
    $select->execute();
    $data = $select->fetch(PDO::FETCH_OBJ);



  }



?>


      <div class="row mb-4">
        <h2 class="col-12 tm-text-primary"><?php echo $data->title ?></h2>
      </div>
      <div class="row tm-mb-90">
        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
          <img src="img/<?php echo $data->img ?>" alt="Image" class="img-fluid" />
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
          <div class="tm-bg-gray tm-video-details">
            <div class="mb-4">
              <h3 class="tm-text-gray-dark">Description</h3>
              <p>
                <?php echo substr($data->description,0,300) ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php if(isset($_SESSION['username'])) : ?>
      <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">Explore More Photos</h2>
      </div>
      <div class="row mb-3 tm-gallery">
      <?php foreach($rows as $row) :?>
        
        <?php if($_SESSION['username'] == $row->user_name) : ?>  

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/<?php echo $row->img ; ?>" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center">
              <h2><?php echo $row->title ; ?></h2>
              <a href="photo-detail.php?id=<?php echo $row->id ?>">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"><?php echo date('d',strtotime($row->created_at)).' '.date('M',strtotime($row->created_at)).' '.date('Y',strtotime($row->created_at)) ; ?></span>
            <span>by <?php echo $row->user_name ?></span>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <!-- row -->
      <?php require "includes/footer.php" ?>