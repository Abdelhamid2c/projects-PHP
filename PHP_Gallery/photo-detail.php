<?php require "includes/header.php" ?>
<?php 

if(!isset($_SESSION['username'])) {header("location:index.php");}
?>


      <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">Photo title goes here</h2>
      </div>
      <div class="row tm-mb-90">
        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
          <img src="img/img-01-big.jpg" alt="Image" class="img-fluid" />
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
          <div class="tm-bg-gray tm-video-details">
            <div class="mb-4">
              <h3 class="tm-text-gray-dark">Description</h3>
              <p>
                Free for both personal and commercial use. No need to pay
                anything. No need to make any attribution.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">Explore More Photos</h2>
      </div>
      <div class="row mb-3 tm-gallery">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-04.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center">
              <h2>Clocks</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">18 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-03.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center">
              <h2>Clocks</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">18 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-02.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center">
              <h2>Clocks</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">18 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-01.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center">
              <h2>Clocks</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">18 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
      </div>
      <!-- row -->
      <?php require "includes/footer.php" ?>