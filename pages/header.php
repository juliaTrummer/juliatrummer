<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/head.php'; ?>
    </head>
    <body>
        <main>
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="overlay">
                    <h1>JULIA TRUMMER</h1>
                </div>
                <div class="carousel-item active">
                  <img src="http://localhost/juliatrummer/tpl/images/DSC_7732.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="http://localhost/juliatrummer/tpl/images/DSC_7732.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="http://localhost/juliatrummer/tpl/images/DSC_7732.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- current projects -->
            <div id="container">
                <h2 class="ps-3 pt-3">CURRENT PROJECTS</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4 ps-3 pe-3 pb-3 ">
                  <div class="col">
                    <div class="card">
                      <img src="http://localhost/juliatrummer/tpl/images/DSC_7732.jpg" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />
                      <div class="card-body">
                        <h5 class="card-title">UI/UX Design</h5>
                        <p class="card-text">
                          This is a longer card with supporting text below as a natural lead-in to
                          additional content. This content is a little bit longer.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="http://localhost/juliatrummer/tpl/images/DSC_7732.jpg" class="card-img-top"
                        alt="Palm Springs Road" />
                      <div class="card-body">
                        <h5 class="card-title">Photography</h5>
                        <p class="card-text">
                          This is a longer card with supporting text below as a natural lead-in to
                          additional content. This content is a little bit longer.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="http://localhost/juliatrummer/tpl/images/DSC_7732.jpg" class="card-img-top"
                        alt="Los Angeles Skyscrapers" />
                      <div class="card-body">
                        <h5 class="card-title">3D Design</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                          additional content.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </main>
    </body>
</html>