<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Misamis Oriental Care System</title>
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
    <link rel="stylesheet" href="css/style.violet.css" id="theme-st	ylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/photo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header"><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">MisOr</strong><strong>Care System</strong></div>	
              <div class="brand-text brand-sm"><strong class="text-primary">Mis</strong><strong>Or</strong></div></a>
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <ul class="right-menu list-inline no-margin-bottom">
            <!--search-->    
            <li class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></li>
            <li class="list-inline-item logout">                   <a id="logout" href="login.php" class="nav-link">Logout <i class="icon-logout"></i></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/photo.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Manticao</h1>
          </div>
        </div><span class="heading">Welcome!</span>
        <ul class="list-unstyled">
          <li><a href="index.php"><i class="icon-home"></i>Home</a></li>
          <li> <a href="registeredClient.php"> <i class="icon-grid"></i>Registered Clients</a></li>
          <li class="active"><a href="registerClient.php"> <i class="icon-padnote"></i>Register Client </a></li>
          <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Avail Services </a>
            <ul id="dashvariants" class="collapse list-unstyled">
              <li><a href="availmed.php">Avail Medicines/Laboratory</a></li>
              <li><a href="deathassistance.php">Death Assistance</a></li>
              <li><a href="bloodassistance.php">Blood Assistance</a></li>
              <li><a href="ercase.php">ER Case</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="page-content form-page">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Registration Form</h2>
          </div>
        </div>
        <ul class="breadcrumb">
          <div class="container-fluid">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Registration Form</li>
          </div>
        </ul>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
            
             
                </div>
              </div>
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Registration</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" action="includes/testing.php">




                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Source of Drinking Water:</label>
                        <div class="col-sm-9">
                        <div class="i-checks">
                            <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                            <label for="checkboxCustom1">Spring/Communal/Deep Well</label>
                          </div>    
                          <div class="i-checks">
                            <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                            <label for="checkboxCustom1">Communal/Faucets</label>
                          </div>
                          <div class="i-checks">
                            <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                            <label for="checkboxCustom1">Household Faucets</label>
                          </div>
                          <div class="i-checks">
                            <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                            <label for="checkboxCustom1">Peddler</label>
                          </div>
                          </div>
                        </div>


                        <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">House Structure:</label>
                            <div class="col-sm-6 select">
                              <select name="account" class="form-control">
                                <option>Concrete</option>
                                <option>Semi-concrete</option>
                                <option>Light-Materials</option>
                              </select>
                              </div>
                            </div>
                         <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Type of Toilet Facility:</label>
                            <div class="col-sm-6 select">
                              <select name="account" class="form-control">
                                <option>Water-sealed toilet</option>
                                <option>Antipolo</option>
                                <option>No Toilet</option>
                              </select>
                              </div>
                            </div>
                            <div class="line"></div>
                        <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                      </form>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                        <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
            </div>
          </section>
          </div>
      </div>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2018 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>