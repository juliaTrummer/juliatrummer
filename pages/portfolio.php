<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../inc/head.php'; ?>
</head>
<body>

    <?php  $page = 'portfolio'; include '../inc/navbar.php'; ?>

    <section id="portfolio" class="container-fluid justify-content-center mx-auto p-5 mt-5">
        <h1>PORTFOLIO</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <div class="col m-2">
                <div class="card">
                    <img src="IMGS/photography/DSC_8355.jpg" class="card-img-top" alt="Photo">
                    <div class="card-body">
                        <h5 class="card-title">Photography</h5>
                        <p class="card-text">
                            This is a small image gallery about my photography works.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col m-2">
                <div class="card">
                    <img src="IMGS/photography/novem_168.jpg" class="card-img-top" alt="Photo">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col m-2">
                <div class="card">
                    <img src="./IMGS/photography/photo1644335027.jpg" class="card-img-top" alt="Photo">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
  </body>
</html>