<!-- Navbar -->
  <section>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="d-flex flex-grow-1">
          <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
          <a class="navbar-brand d-none d-lg-inline-block" href="http://localhost/juliatrummer/index.php">
              <img src="http://localhost/juliatrummer/tpl/images/logojuliatrummer.png" alt="logo" width="20px" style="margin-top:-6px; margin-right:5px;">
              Julia Trummer
          </a>
          <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="http://localhost/juliatrummer/index.php">
              <img src="http://localhost/juliatrummer/tpl/images/logojuliatrummer.png" alt="logo" width="20px" style="margin-top:5px;">
          </a>
          <div class="w-100 text-right">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
      </div>
      <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
          <ul class="navbar-nav ml-auto flex-nowrap">
              <li class="nav-item">
                  <a href="http://localhost/juliatrummer/pages/about.php" class="nav-link m-2 menu-item <?php if($page=='about'){echo 'active';}?>">About</a>
              </li>
              <li class="nav-item">
                  <a href="http://localhost/juliatrummer/pages/portfolio.php" class="nav-link m-2 menu-item <?php if($page=='portfolio'){echo 'active';}?>">Portfolio</a>
              </li>
              <li class="nav-item">
                  <a href="http://localhost/juliatrummer/pages/work.php" class="nav-link m-2 menu-item <?php if($page=='work'){echo 'active';}?>">Work</a>
              </li>
              <li class="nav-item">
                  <a href="http://localhost/juliatrummer/pages/contact.php" class="nav-link m-2 menu-item <?php if($page=='contact'){echo 'active';}?>">Contact</a>
              </li>
          </ul>
      </div>
      </nav>
      <!--- TODO: Fix the rootpath --->
      <?php
        define('ROOT_DIR', 'http://localhost/juliatrummer/');
      ?>
  </section>