<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/juliatrummer/index.php">
          <img src="http://localhost/juliatrummer/tpl/images/logojuliatrummer.png" alt="logo" width="20px" style="margin-top:-6px; margin-right:5px;">
          Julia Trummer
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
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
    </div>
</nav>