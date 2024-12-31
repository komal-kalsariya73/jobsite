
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <?php
    include "headlink.php";
    ?>
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <?php
  include "header.php";
  ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Apply a Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="py-5 bg-light">
    <div class="container">
      <div class="apply_job_form bg-white p-5 shadow-sm rounded">
        <h4 class="mb-4">Apply for the Job</h4>
        <form action="#" class="w-75">
          <div class="row g-4">
            <!-- Name -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name">
              </div>
            </div>
            <!-- Email -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Enter your email">
              </div>
            </div>
            <!-- Website/Portfolio -->
            <div class="col-md-12">
              <div class="form-group">
                <label for="portfolio" class="form-label">Website/Portfolio Link</label>
                <input type="text" id="portfolio" class="form-control" placeholder="Enter your portfolio link">
              </div>
            </div>
            <!-- Upload CV -->
            <div class="col-md-12">
              <div class="form-group">
                <label for="cv" class="form-label">Upload CV</label>
                <div class="input-group">
                  <label class="input-group-text" for="cv"><i class="fa fa-cloud-upload-alt"></i></label>
                  <input type="file" class="form-control" id="cv">
                </div>
              </div>
            </div>
            <!-- Cover Letter -->
            <div class="col-md-12">
              <div class="form-group">
                <label for="coverletter" class="form-label">Cover Letter</label>
                <textarea id="coverletter" class="form-control" rows="6" placeholder="Write your cover letter"></textarea>
              </div>
            </div>
            <!-- Submit Button -->
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary w-100 py-2">Apply Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

    
    
    <?php
   include "footer.php";
   ?>
  </div>

    <!-- SCRIPTS -->
    <?php
    include "jslink.php";
    ?>
   
   
     
  </body>
</html>