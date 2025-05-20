<?php include ('../include/database.php'); ?>
<?php include ('../include/server.php') ?>
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
    <title>Students Systems Projects Management System. </title>
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
    <link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <link href="../css/xcharts.min.css" rel=" stylesheet">
    <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
      </head>
  <style >
    .col-md-9 {

      margin-right: 0px;
      margin-left: 100px;
    }
    .table{
      border-collapse: collapse;
    }
    .table th, td {
      border: 1px solid black;
      border-top: 1px solid black;
    }
    .table tbody td {
    }
  </style>
  <body>
    <!-- container section start -->
    <section id="container" class="">
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
        <section id="main-content">
          <section class="wrapper">
            <!--overview start-->
            <div class="row">
              <div class="">
                <h3 class="page-header"><i class="fa fa-home"></i> Project Documents</h3>
              </div>
            </div>
              <form>
                <table class="table table-bordered table-striped table-hover" style="margin-left: 9px;" id="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Student Registration Number</th>
                      <th>Project Title</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                  $db = new DBconnect();
                  $conn=$db->connect();
                  $lecturer_name = $_SESSION['lecturer_name'];
                  //print_r($lecturer_name);
                  $query=$conn->prepare("select * from users where lecturer_username = '$lecturer_name'");
                  $query->execute([]);
                  if($query ->rowCount() > 0 ){

                  while ($row=$query->fetch() ) {
                  echo "<tr>
                    
                    <td>".$row['user_id']."</td>
                    <td>".$row['student_name']."</td>
                    <td>".$row['student_reg_no']."</td>
                    <td>".$row['project_title']."</td>
                    
                  </tr>";
                  }
                  }else{
                    echo "string";
                  }
                  ?>
                  
                </tbody>
                </table>
              </form>
            </section>
          </section>
          
        </section>
        <!-- container section start -->
        <!-- javascripts -->
        <script src="../js/jquery.js"></script>
        <script src="../js/jquery-ui-1.10.4.min.js"></script>
        <script src="../js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
        <!-- bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="../js/jquery.scrollTo.min.js"></script>
        <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- charts scripts -->
        <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="../js/owl.carousel.js"></script>
        <!-- jQuery full calendar -->
        <<script src="../js/fullcalendar.min.js"></script>
        <!-- Full Google Calendar - Calendar -->
        <script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
        <!--script for this page only-->
        <script src="../js/calendar-custom.js"></script>
        <script src="../js/jquery.rateit.min.js"></script>
        <!-- custom select -->
        <script src="../js/jquery.customSelect.min.js"></script>
        <script src="../assets/chart-master/Chart.js"></script>
        <!--custome script for all page-->
        <script src="../js/scripts.js"></script>
        <!-- custom script for this page-->
        <script src="../js/sparkline-chart.js"></script>
        <script src="../js/easy-pie-chart.js"></script>
        <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../js/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../js/xcharts.min.js"></script>
        <script src="../js/jquery.autosize.min.js"></script>
        <script src="../js/jquery.placeholder.min.js"></script>
        <script src="../js/gdp-data.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/sparklines.js"></script>
        <script src="../js/charts.js"></script>
        <script src="../js/jquery.slimscroll.min.js"></script>
        <!--custom checkbox & radio-->
        <script type="text/javascript" src="../js/ga.js"></script>
        <!--custom switch-->
        <script src="../js/bootstrap-switch.js"></script>
        <!--custom tagsinput-->
        <script src="../js/jquery.tagsinput.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="../js/jquery.hotkeys.js"></script>
        <script src="../js/bootstrap-wysiwyg.js"></script>
        <script src="../js/bootstrap-wysiwyg-custom.js"></script>
        <script src="../js/moment.js"></script>
        <script src="../js/bootstrap-colorpicker.js"></script>
        <script src="../js/daterangepicker.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <!-- ck editor -->
        <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
        <!-- custom form component script for this page-->
        <script src="../js/form-component.js"></script>
        <!-- gritter -->
        <!-- custom gritter script for this page only-->
        <script src="../js/gritter.js" type="text/javascript"></script>
        <!--custome script for all page-->
        <script>
        //knob