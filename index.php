 <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <!-- General -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Montserrat:wght@300&display=swap" rel="stylesheet">

      <link rel="icon" type="image/png" href="./tpl/images/logojuliatrummer.png">
      <link  rel="stylesheet" href="./tpl/css/index.css">

      <title>Julia Trummer</title>
</head>
<body>
    <?php include 'footer.php';?>
    <?php
    $email= $_POST['email'];
    $name= $_POST['user'];
    $password = $_POST['password'];
    if(isset($_POST['submit'])) {
      // Check if name has been entered
      if(empty($_POST['user'])) {
        $errName= 'Please enter your user name';
      }
      // Check if email has been entered and is valid
      else if(empty($_POST['email'])) {
        $errEmail = 'Please enter a valid email address';
      }
      // check if a password has been entered and if it is a valid password
      else if(empty($_POST['password']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
        $errPass = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
      } else {
        echo "The form has been submitted";
      }
    }
    ?>

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

  <!-- Navbar -->
  <section>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="d-flex flex-grow-1">
          <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
          <a class="navbar-brand d-none d-lg-inline-block" href="#">
              <img src="./tpl/images/logojuliatrummer.png" alt="logo" width="20px" style="margin-top:-6px; margin-right:5px;">
              Julia Trummer
          </a>
          <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
              <img src="./tpl/images/logojuliatrummer.png" alt="logo" width="20px" style="margin-top:5px;">
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
                  <a href="#about" class="nav-link m-2 menu-item nav-active">About</a>
              </li>
              <li class="nav-item">
                  <a href="#portfolio" class="nav-link m-2 menu-item">Portfolio</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link m-2 menu-item">Work</a>
              </li>
              <li class="nav-item">
                  <a href="#contact" class="nav-link m-2 menu-item">Contact</a>
              </li>
          </ul>
      </div>
      </nav>
  </section>

    <section>

  <div class="container">
       <h1>CONTACT</h1>
        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
              <?php echo $errEmail; ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
              <?php echo $errName; ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              <?php echo $errPass; ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
            </div>
          </div>
        </form>
      </div>
  </section>

  <!--- Import last (performance) --->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>