<?php include('header.php'); ?>

<!-- content start -->
<section>
  <div class="content-wrapper wrapper-adjust">
    <div class="row mx-0">
      <div class="col-12 col-md-8 col-lg-10">
        <div class="wrapper-header mb-5">
          <div class="container-fluid d-flex justify-content-between">
            <h1 class="display-6">3. Verify your website</h1>
            <div class="my-auto">
              <a href="finish.php" class="btn text-white bg-sidebar">
                Continue
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="alert bg-primary text-center" role="alert">
          We need to verify, for security reasons, that this website belongs to you. You have 3 different
          ways:
        </div>

        <div class="mt-4 container-fluid">
          <div class="row">
            <!-- 1 -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <div class=" bg-light-pink p-4 text-center">
                  <img src="assets/images/verify_website_code.png" class="w-auto mb-3" alt="image">
                  <h3 class="mb-3">Code</h3>
                  <p class="mb-2">Add this code between the head tags of your website:</p>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                      aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-copy"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <div class=" bg-light-pink p-4 text-center">
                  <img src="assets/images/verify_website_server.png" class="w-auto mb-3" alt="image">
                  <h3 class="mb-3">Server</h3>
                  <p class="mb-2">Download the file and upload it to the root folder of your
                    website</p>
                  <button class="btn btn-primary">Download</button>
                </div>
              </div>
            </div>
            <!-- 3 -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <div class=" bg-light-pink p-4 text-center">
                  <img src="assets/images/verify_website_analytics.png" class="w-auto mb-3" alt="image">
                  <h3 class="mb-3">Analytics</h3>
                  <p class="mb-2">Link your Analitycs account and verify your website</p>
                  <button class="btn btn-warning">Connect</button>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-3 text-center">
            <p>Click on “Verify now” if you have done any of the three options to validate your account.
            </p>
            <div class="mb-2">
              <button class="btn bg-sidebar">Verify Now</button>
              <button type="button" class="btn btn-outline-secondary text-black">Verify later</button>
            </div>
            <p>If you have any questions follow this guide where we explain step by step how to verify
              your website.
              If you <br>still cannot do it send us an email to and we will be pleased to help you..
            </p>
          </div>
        </div>
      </div>
      <div class="col-0 col-md-4 col-lg-2 mt-3 h-full">
        <div class="fw-bold">
          <span class="bg-sidebar text-white circle-adj">1</span>
          Enter the URL
        </div>
        <div class="mt-5">
          <span class="bg-sidebar text-white circle-adj">2</span>
          Complete the data
        </div>
        <div class="mt-5">
          <span class="bg-sidebar text-white circle-adj">3</span>
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