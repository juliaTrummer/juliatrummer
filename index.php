<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './inc/head.php'; ?>
</head>
<body>

    <?php include './inc/navbar.php'; ?>
    <header id="headerCarousel " class="container-fluid p-0 m-0">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="overlay"><h1>JULIA TRUMMER</h1></div>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="image-fluid" src="./tpl/images/DSC_7732.jpg" alt="Cloudy sky just before a storm">
                  </div>
                  <div class="carousel-item">
                      <img class="image-fluid" src="./tpl/images/DSC_9423.jpg" alt="Sunset with thymeplant in the foreground">
                  </div>
                  <div class="carousel-item">
                      <img class="image-fluid" src="./tpl/images/DSC_6666.jpg" alt="Hand holding a glassglobe into the sunset">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
    </header>

    <?php include './inc/footer.php'; ?>
    <?php include './inc/scripts.php'; ?>
  </body>
</html>