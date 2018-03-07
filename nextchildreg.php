<?php
//  if(isset($_POST['firstreg'])){
//    session_start();
//
//    $_SESSION['clientlnamesave'] = $_POST['clientlname'];
//  } else if(isset($_POST['addchild'])){
//    session_start();
//
//  header("Location: /dark-admin/includes/nextchildreg-func.php");
//    exit();
//  }else 
  if(isset($_POST['moveon'])){
    session_start();

    header("Location: ../regparents.php");
    exit();
  }else{
    session_start();

//    echo $_SESSION['clientid'];
  }
?>

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

              <!--
                FORM
                STARTS
                HERE
              -->

              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Registration</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" action="includes/nextchildreg-func.php" method="POST">
                        <p><u>Children/s</u></p> 
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Last Name</label>
                        <div class="col-sm-9">
                          <input name="childlname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">First Name</label>
                        <div class="col-sm-9">
                          <input name="childfname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Middle Name</label>
                        <div class="col-sm-9">
                          <input name="childmname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Suffix</label>
                        <div class="col-sm-9">
                          <input name="childsuffix" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Place of Birth</label>
                        <div class="col-sm-9">
                          <input name="childpob" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Gender</label>
                        <div class="col-sm-4 select">
                          <select name="childgender" class="form-control">
                            <option>Female</option>
                            <option>Male</option>
                          </select>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Birthdate</label>
                        <div class="col-sm-3 select">
                          <select name="childmonth" class="form-control">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                          </select>
                        </div>
                        <div class="col-sm-3 select">
                          <select name="childday" class="form-control">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
                        </div>
                        <div class="col-sm-3 select">
                          <select name="childyear" class="form-control">
                            <option>2000</option>
                            <option>1999</option>
                            <option>1998</option>
                            <option>1997</option>
                          </select>
                        </div>
                      </div> 
                          <button name="addchild" type="submit" class="btn btn-secondary">Add Children</button>

                          <!---->
                          <div class="line"></div>
                          <div class="form-group row">
                              <div class="col-sm-9 ml-auto">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button name="moveon" type="submit" class="btn btn-primary">Next</button>
                              </div>
                          </div>
                          <!---->
                      </form>



                      </div>   
                  </div>
            </div>
          </section>
          <!--
             <div class="line"></div>
                <div class="form-group row">
                    <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
              <!-- -->
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