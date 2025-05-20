<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../img/favicon.png">
    <title>Project Proposal | Students Systems Projects Management System </title>
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
    <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo"><span class="lite"> Students Systems Projects Management System. </span></a>
        <!--logo end-->
        
        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">
            <!-- task notificatoin start -->
            <li id="task_notificatoin_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-task-l"></i>
                <span class="badge bg-important"></span>
              </a>
            </li>
            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->
            <li id="mail_notificatoin_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-envelope-l"></i>
                <span class="badge bg-important"></span>
              </a>
            </li>
            <!-- inbox notificatoin end -->
            <!-- alert notification start-->
            <li id="alert_notificatoin_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-bell-l"></i>
                <span class="badge bg-important"></span>
              </a>
            </li>
            </ul>
            <!-- notificatoin dropdown end-->
          </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
          <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
              <li class="active">
                <a class="" href="../dashboard/coordinator.php">
                  <i class="icon_house_alt"></i>
                  <span> Dashboard </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="EditAdminProfile.php" class="">
                  <i class="icon_profile"></i>
                  <span>Edit Profile </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <i class="icon_profile"></i>
                  <span> Register Users </span>
                </a>
                <ul class="sub">
                  <li><a class="" href="../controller/register_student.php"> Students </a></li>
                  <li><a class="" href="../controller/register_supervisor.php"> Supervisors </a></li>
                </ul>
              </li>
              <li>
                <a class="" href="../controller/allocate_supervisors.php">
                  <i class="icon_profile"></i>
                  <span>Allocate Supervisors </span>
                </a>
              </li>
              <li>
                <a class="" href="../controller/user.php">
                  <i class="icon_profile"></i>
                  <span> Users </span>
                </a>
              </li>
              <li>
                <a class="" href="../view/projects.php">
                  <i class="icon_documents_alt"></i>
                  <span> Ongoing Projects</span>
                </a>
              </li>
              <li>
                <a class="" href="../index.php">
                  <i class="fa fa-sign-out"></i>
                  <span>Log Out </span>
                </a>
              </li>
            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
          <section class="wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_profile"></i> Student Registration </h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="coordinator.php">Home</a></li>
                  <li><i class="icon_profile"></i> <a href="register_student.php"> Student Registration </a></li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="col-lg-12">
                  <section class="panel">
                    <div class="panel-body">
                      <form class="form-horizantal" action="../include/server.php" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <label class="col-md-6"> Student Name </label>
                            <input type="text" name="student_name" class="form-control" pattern="[A-Za-z']+" required>
                          </div>
                          <div class="col-lg-6">
                            <label class="col-md-6"> Student Registration Number </label>
                            <input type="text" name="student_reg_no" class="form-control" pattern="[A-Za-z']+" required>
                          </div>
                          
                        </div><br>
                        <div class="row">
                          <div class="col-lg-6">
                            <label class="col-md-6">Username </label>
                            <input type="text" name="username" class="form-control" pattern="[A-Za-z']+" required>
                          </div>
                          <div class="col-lg-6">
                            <label class="col-md-6"> Project Title </label>
                            <input type="text" name="project_title" class="form-control" pattern="[A-Za-z']+" required>
                          </div>
                        </div> <br>
                        <div class="row">
                          <div class="col-lg-6">
                            <label class="col-md-6"> Password </label>
                            <input type="password" name="password" class="form-control" required>
                          </div>
                        </div><br><br>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="col-md-6">
                              <button type="submit" class="btn btn-primary" name="register1" value="register1"> Register </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
        </section>
        <!--main content end-->
        <div class="text-right">
          <div class="credits">
            <a href="">Students Systems Projects Management System</a>
          </div>
        </div>
      </section>
      <!-- container section end -->
      <!-- javascripts -->
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="../js/jquery.scrollTo.min.js"></script>
      <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- gritter -->
      <!-- custom gritter script for this page only-->
      <script src="../js/gritter.js" type="text/javascript"></script>
      <!--custome script for all page-->
      <script src="../js/scripts.js"></script>
    </body>
  </html>