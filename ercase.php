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
    <link rel="stylesheet" href="css/style.violet.css" id="theme-stylesheet">
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
          <div class="navbar-header"><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Misamis Or</strong><strong>Care System</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">Mis</strong><strong>Or</strong></div></a>
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <ul class="right-menu list-inline no-margin-bottom">
            <!--search-->    
            <li class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></li>
            <li class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></li>
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
               <p>Extension Office</p>
          </div>
        </div><span class="heading">Welcome!</span>
        <ul class="list-unstyled">
          <li><a href="index.html"><i class="icon-home"></i>Home</a></li>
          <li> <a href="registeredClient.html"> <i class="icon-grid"></i>Registered Clients</a></li>
          <li><a href="registerClient.html"> <i class="icon-padnote"></i>Register Client </a></li>
          <li><a href="#dashvariants" aria-expanded="false" > <i class="icon-windows"></i>Avail Services </a>
            <ul id="dashvariants" class="list-unstyled">
              <li><a href="availmed.html">Avail Medicines/Laboratory</a></li>
              <li><a href="deathassistance.html">Death Assistance</a></li>
              <li><a href="bloodassistance.html">Blood Assistance</a></li>
              <li class="active"><a href="ercase.html">ER Case</a></li>
            </ul>
          </li>
         </ul>
      </nav>
      <div class="page-content form-page">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">ER Case</h2>
          </div>
        </div>
        <ul class="breadcrumb">
          <div class="container-fluid">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">ER Case</li>
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
                  <div class="title"><strong>ER Case</strong></div>
                  <div class="block-body">

                    <!--
                      FORM START
                    -->

                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Card ID</label>
                        <div class="col-sm-9">
                          <input type="text" name="cardid" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of the Cardholder</label>
                        <div class="col-sm-9">
                          <input type="text" name="cardholder" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of Patient</label>
                        <div class="col-sm-9">
                          <input type="text" name="patient" class="form-control">
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Age</label>
                        <div class="col-sm-9">
                          <input type="text" name="age" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Municpality</label>
                        <div class="col-sm-9 select">
                          <select name="municipality" class="form-control">
                            <option>Manticao Misamis Oriental</option>
                            <option>Initao Misamis Oriental</option>
                          </select>
                        </div>
                      </div>
                      <div class="line">
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Address</label>
                             <div class="col-md-6">
                                <input type="text" name="address" placeholder="Purok" class="form-control border-input">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="zipcode" placeholder="Zipcode" class="form-control border-input">
                             </div>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Patient Case</label>
                        <textarea rows="5" name="case" class="col-sm-9 form-control border-input"></textarea>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Amount</label>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon">₱</span>
                              <input type="text" name="amount" class="form-control"><span class="input-group-addon">.00</span>
                            </div>
                          </div>
                          </div>
                        </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                    
                    <!--
                      END OF FORM
                    -->

                    </div>
                  </div>
            </div>
          </section>
        </div>
      </div>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2017 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
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