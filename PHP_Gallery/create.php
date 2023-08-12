<?php require "includes/header.php" ; ?>

      <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">Create Photo</h2>
      </div>
      <div class="row mb-4">
        <form method="" action="" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input
              type="text"
              name="title"
              id="form2Example1"
              class="form-control"
              placeholder="title" />
          </div>

          <div class="form-outline mb-4">
            <textarea
              type="text"
              name="description"
              id="form2Example1"
              class="form-control"
              placeholder="description"
              rows="8"></textarea>
          </div>

          <div class="form-outline mb-4">
            <input
              type="file"
              name="img"
              id="form2Example1"
              class="form-control"
              placeholder="image" />
          </div>

          <!-- Submit button -->
          <button
            type="submit"
            name="submit"
            class="btn btn-primary mb-4 text-center">
            create
          </button>
        </form>
      </div>
    
<?php require "includes/footer.php" ; ?>