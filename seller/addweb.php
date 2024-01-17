<?php include('header.php'); ?>

<!-- content start -->
<section>
  <div class="content-wrapper wrapper-adjust">
    <div class="row mx-0">
      <div class="col-12 col-md-8 col-lg-10">
        <div class="wrapper-header">
          <div class="container-fluid d-flex justify-content-between">
            <h1 class="display-6">1. Enter URL</h1>
            <div class="my-auto">
              <a href="index2.php" class="btn text-white bg-black"><i class="fa-solid fa-arrow-left"></i>
                Cancel</a>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="alert bg-primary text-center" role="alert">
            <span class="fw-bold">Important:</span> We do not accept link farms, review farms, websites
            with
            duplicate or low quality content.
          </div>

          <div class="mb-3">
            <label for="url">URL of your website <span class="text-black">*</span></label>
            <input type="text" id="url" class="form-control" placeholder="http://www.pressrelease.com">
          </div>
          <div class="mb-3 d-flex justify-content-between">
            <a href="" class="btn border text-black rounded"><i class="fa-solid fa-forward"></i>
              Skip</a>
            <a href="completeData.php" class="btn bg-sidebar"><i class="fa-solid fa-arrow-right"></i>
              Next</a>
          </div>
        </div>

      </div>
      <div class="col-0 col-md-4 col-lg-2 mt-3 h-full">
        <div class="fw-bold">
          <span class="bg-sidebar text-white circle-adj">1</span>
          Enter the URL
        </div>
        <div class="mt-5">
          <span class="bg-grey text-white circle-adj">2</span>
          Complete the data
        </div>
        <div class="mt-5">
          <span class="bg-grey text-white circle-adj">3</span>
          Verify your website
        </div>
        <div class="mt-5">
          <span class="bg-grey text-white circle-adj">4</span>
          Finished
        </div>
      </div>
    </div>

  </div>
</section>
<!-- content end -->

<?php include('footer.php'); ?>