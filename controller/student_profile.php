<?php include ('../include/database.php'); ?>
<?php include ('../include/server.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../img/favicon.png">
    <title>Profile | Students Systems Projects Management System. </title>
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
  </head>
  <style type="text/css">
    .col-sm-6 {
      align-content: center;
      margin-left: 250px;
      align-items: center;
      font-size: 10%;
    }
  </style>
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
                <a href="../controller/student_profile.php" class="">
                  <i class="icon_profile"></i>
                  <span>My Profile </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <i class="icon_documents_alt"></i>
                  <span>Project Documents</span>
                </a>
                <ul class="sub">
                  <li><a class="" href="../view/display_journal.php"> Project Journal </a></li>
                  <li><a class="" href="../controller/proposal.php"> Project Proposal </a></li>
                  <li><a class="" href="../controller/srs.php"> SRS </a></li>
                  <li><a class="" href="../controller/sdd.php"> SDD </a></li>
                  <li><a class="" href="../controller/test_plan.php"> Test Plan </a></li>
                  <li><a class="" href="../controller/user_manual.php"> User Manual </a></li>
                </ul>
              </li>
              <li class="sub-menu">
                <a href="document.php" class="">
                  <i class="icon_document_alt"></i>
                  <span> Feedback </span>
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
              <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-user-md"></i><a href="../controller/student_profile.php">My Profile</a></li>
              </ol>
            </div>
            <div>
              
            </div>
          </div>
          
          <?php
          $db = new DBconnect();
          $conn=$db->connect();
          $username = $_SESSION['username'];
          $query=$conn->prepare("select * from student_details where username = '$username' ");
          $query->execute([]);
          if($query->rowCount() > 0){
          while ( $row=$query->fetch()) {
          $student_name = $row['student_name'];
          $student_reg_no = $row['student_reg_no'];
          $project_title = $row['project_title'];
          $username = $row['username'];
          echo "<div class = 'col-sm-6'>
            <div class = 'card' id = 'cards'>
              <div class = 'card-body' id = 'body'>
                <h5 class = 'card-title' id = 'title'>Student name: $student_name </h5><br>
                <h5 class = 'card-title' id = 'title'>Student Registration number: $student_reg_no </h5><br>
                <h5 class = 'card-title' id = 'title'>Project Title: $project_title </h5><br>
                <h5 class = 'card-title' id = 'title'>Username: $username </h5>
              </div>
            </div>
          </div>";
          }
          }
          ?>
        </section>
      </section>
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <script>
    //knob
    $(".knob").knob();
    </script>
  </body>
</html>