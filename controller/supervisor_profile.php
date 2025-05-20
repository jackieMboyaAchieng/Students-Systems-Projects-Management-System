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
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <script src="../js/lte-ie7.js"></script>
    <![endif]-->
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
                <a class="" href="../dashboard/supervisor.php">
                  <i class="icon_house_alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="../controller/supervisor_profile.php" class="">
                  <i class="icon_profile"></i>
                  <span>My Profile </span>
                </a>
              </li>
              <li>
                <a class="" href="../controller/students.php">
                  <i class="icon_profile"></i>
                  <span> Students' Details </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="../controller/approve.php" class="">
                  <i class="icon_documents_alt"></i>
                  <span> Approve/Reject </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="../controller/reviewed.php" class="">
                  <i class="icon_documents_alt"></i>
                  <span> Reviewed Document </span>
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
                <li><i class="fa fa-user-md"></i><a href="../controller/supervisor_profile.php">My Profile</a></li>
              </ol>
            </div>
            <div>
              
            </div>
          </div>
          
          <?php
          $db = new DBconnect();
          $conn=$db->connect();
          $lecturer_name = $_SESSION['lecturer_name'];
          $query=$conn->prepare("select * from lecturer_details where lecturer_name = '$lecturer_name' ");
          $query->execute([]);
          if($query->rowCount() > 0){
          while ( $row=$query->fetch()) {
          $student_name = $row['lecturer_name'];
          $student_reg_no = $row['staff_no'];
          $username = $row['username'];
          echo "<div class = 'col-sm-6'>
            <div class = 'card' id = 'cards'>
              <div class = 'card-body' id = 'body'>
                <h5 class = 'card-title' id = 'title'>Lecturer name: $lecturer_name </h5><br>
                <h5 class = 'card-title' id = 'title'>Staff number: $staff_no </h5><br>
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