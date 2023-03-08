<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../inc/head.php'; ?>
</head>
<body>
    <?php $page = 'contact'; include '../inc/navbar.php'; ?>
    <section class="container-fluid p-5 mt-5">
        <div class="row h-100">
            <div class="col-sm-0 col-md-6">

            </div>
            <div class="col-sm-0 col-md-6 align-self-center">
               <h1>CONTACT</h1>
                <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <div class="form-group row">
                  <!---NAME--->
                    <label for="inputName" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                      <?php echo $errName; ?>
                    </div>
                  </div>
                   <div class="form-group row">
                    <!---SUBJECT--->
                      <label for="inputSubject" class="col-md-2 col-form-label">Subject</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="inputSubject" name="subject" placeholder="Subject">
                        <?php echo $errSubject; ?>
                      </div>
                   </div>
                  <div class="form-group row">
                   <!---EMAIL--->
                    <label for="inputEmail" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                      <?php echo $errEmail; ?>
                    </div>
                  </div>
                  <div class="form-group row">
                   <!---MESSAGE--->
                      <label for="inputMessage" class="col-md-2 col-form-label">Message</label>
                      <div class="col-md-10">
                        <input type="message" class="form-control" id="inputMsg" name="message" placeholder="Message">
                        <?php echo $errMessage; ?>
                      </div>
                  </div>
                  <div class="form-group row">
                   <!---BUTTON--->
                    <div class="offset-md-2 col-md-10">
                      <input type="submit" value="Send" name="submit" class="btn btn-primary"/>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
        <?php
            $email= $_POST['email'];
            $name= $_POST['name'];
            $subject= $_POST['subject'];
            $message= $_POST['message'];

            $to = "julia-trummer@gmx.net";
            $subject = "This is subject";

            $message = "<b>This is HTML message.</b>";
            $message .= "<h1>This is headline.</h1>";
            $header = "From:abc@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            if(isset($_POST['submit'])) {
              if(empty($_POST['name'])) {
                $errName= 'Please enter your name';
              } else if(empty($_POST['email'])) {
                $errEmail = 'Please enter a valid email address';
              } else if(empty($_POST['subject'])) {
                $errSubject= 'Please enter a subject';
              } else if(empty($_POST['message'])) {
                $errMessage= 'Please enter a message';
              } else {
                //this is where the magic happens
                $retval = mail ($to,$subject,$message,$header);
                if( $retval == true ) {
                    echo "Message sent successfully...";
                }else {
                    echo "Message could not be sent...";
                }
              }
            }
        ?>
    </section>
    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
  </body>
</html>


