<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Show Me Hospital</title>
  </head>
  <body>
    <section class="form-08">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_form-08-main">
              <div class="_form-08-head">
                <h1 style="color: #0d6efd; font-weight: bold;">Show Me<strong style="color:red"> Hospital</strong></h1>
              </div>

              <form action="verifylogin.php" method="post">
              <div class="form-group">
                <label>Enter Your Email</label>
                <input type="email" name="email" class="form-control" type="text" placeholder="Enter Email" required="" aria-required="true">
              </div>

              <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" type="text" placeholder="Enter Password" required="" aria-required="true">
              </div>

              <div class="form-group">
                  <center>
                  <button type="submit" name="submit" class="btn btn-success">Login</button>
                </center>
              </div>
            </form>

              <div class="sub-01">
                <img src="assets/images/shap-02.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- 
    <php 
      if (isset($_POST['submit'])) 
      {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == "admin@nearbyhospital.com" AND $password == "NearbyHospital"){
        echo "<script>alert('Hi, Welcome back.');
            document.location.href='view.php'
            </script>";
        }else{
          echo "<script>alert('Email or password incorrect! Please try again.');
            document.location.href='index.php'
            </script>";
        }
      }
    ?> -->



  </body>
</html>