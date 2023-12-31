
<?php require "includes/header.php" ?>
<?php require "config.php" ?>
<?php 
  $select = $conn->query("SELECT * FROM images  ");
  $select->execute();

  $rows = $select->fetchAll(PDO::FETCH_OBJ);
  print_r($rows);

 
?>
      <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">Latest Photos</h2>
      </div>
      
      <div class="row tm-mb-90 tm-gallery">
      <?php if(isset($_SESSION['username'])) : ?>
        <?php foreach($rows as $row): ?>
          <?php if($_SESSION['username'] == $row->user_name) : ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
              <figure class="effect-ming tm-video-item">
                <img src="img/<?php echo $row->img ; ?>" alt="Image" class="img-fluid" />
                <figcaption
                  class="d-flex align-items-center justify-content-center">
                  <h2><?php echo $row->title ; ?></h2>
                  <a href="photo-detail.php?id=<?php echo $row->id ; ?>">View more</a>
                </figcaption>
              </figure>
              <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light"><?php echo date('d',strtotime($row->created_at)).' '.date('M',strtotime($row->created_at)).' '.date('Y',strtotime($row->created_at)) ; ?></span>
                <span>by <?php echo $row->user_name ; ?></span>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
      
      <!-- row -->
    
    <!-- container-fluid, tm-container-content -->

    
   
<?php require "includes/footer.php" ?>
