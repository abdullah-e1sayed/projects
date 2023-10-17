<?php $nav_item = basename(__FILE__);?>
<?php require "../../config/config.php"; ?>
<?php require "../../include/header.php"; ?>

<div class ="site-wrap">
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo APPURL?>images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">404</h1>
            <div class="text-center">
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                  </p>
                <a href="<?php echo APPURL ;?>" class="btn btn-primary">Go Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>        
</div>
<?php require "../../include/footer.php"; ?>
 