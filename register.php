<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.violet.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Misamis Oriental Care System</h1>
                  </div>
                  <p>Health and Social Services.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">

                  <!--
                  SIGNUP FORM
                  -->

                  <form id="register-form" action="includes/signup-func.php" method="POST">
                    <div class="form-group">
                      <input id="register-username" type="text" name="fname" required class="input-material">
                      <label for="register-fname" class="label-material">First Name</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="text" name="mname" required class="input-material">
                      <label for="register-mname" class="label-material">Middle Name</label>
                    </div>
                    <div class="form-group">
                      <input id="register-lname" type="text" name="lname" required class="input-material">
                      <label for="register-lname" class="label-material">Last Name</label>
                    </div>
                    <div class="form-group">
                      <input id="register-barangay" type="text" name="barangay" required class="input-material">
                      <label for="register-barangay" class="label-material">Barangay</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="email" required class="input-material">
                      <label for="register-email" class="label-material">E-mail</label>
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="username" required class="input-material">
                      <label for="register-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group">
                      <input id="register-password" type="password" name="password" required class="input-material">
                      <label for="register-password" class="label-material">Password</label>
                    </div>
                    <!--
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template">
                      <label for="license" class="no-margin-bottom">Agree the terms and policy</label>
                    </div>
                    -->
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                  </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>