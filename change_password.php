<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Project Proposal | Students Systems Projects Management System </title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
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
        <a href="student.php" class="logo"><span class="lite"> Students Systems Projects Management System. </span></a>
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
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                  <img alt="" src="img/IMG20200128161954.jpg">
                </span>
                <span class="username">Jenifer Smith</span>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                  <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
                </li>
                <li>
                  <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                </li>
                <li>
                  <a href="change_password.php"><i class="icon_key_alt"></i> Change Password </a>
                </li>
                <li>
                  <a href="index.html"><i class="fa fa-sign-out"></i> Log Out</a>
                </ul>
              </li>
              <!-- user login dropdown end -->
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
                <a class="" href="student.php">
                  <i class="icon_house_alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="profile.php" class="">
                  <i class="icon_profile"></i>
                  <span>My Profile </span>
                </a>
              </li>
              <li>
                <a class="" href="project_details.php">
                  <i class="icon_document_alt"></i>
                  <span> Project Details</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <i class="icon_documents_alt"></i>
                  <span>Project Documents</span>
                </a>
                <ul class="sub">
                  <li><a href="journal.php"> Project Journal </a></li>
                  <li><a class="" href="proposal.php"> Project Proposal </a></li>
                  <li><a class="" href="srs.php"> SRS </a></li>
                  <li><a class="" href="sdd.php"> SDD </a></li>
                  <li><a  class="" href="test_plan.php"> Test Plan </a></li>
                  <li><a class="" href="user_manual.php"> User Manual </a></li>
                </ul>
              </li>
              
              <li>
                <a class="" href="index.html">
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
                <h3 class="page-header"><i class="icon_document_alt"></i> Project Proposal </h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                  <li><i class="icon_key_alt"></i> <a href="change_password.php"> Change Password </a></li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <!--notification start-->
                <section class="panel">
                  <header class="panel-heading">
                    Alerts
                  </header>
                  <div class="panel-body">
                    <div class="alert alert-success fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                      </button>
                      <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    <div class="alert alert-block alert-danger fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                      </button>
                      <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>
                    <div class="alert alert-info fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                      </button>
                      <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>
                    <div class="alert alert-warning fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                      </button>
                      <strong>Warning!</strong> Best check yo self, you're not looking too good.
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </section>
        <!--main content end-->
      </section>
      <!-- container section end -->
      <!-- javascripts -->
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="js/jquery.scrollTo.min.js"></script>
      <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- gritter -->
      <!-- custom gritter script for this page only-->
      <script src="js/gritter.js" type="text/javascript"></script>
      <!--custome script for all page-->
      <script src="js/scripts.js"></script>
    </body>
  </html>