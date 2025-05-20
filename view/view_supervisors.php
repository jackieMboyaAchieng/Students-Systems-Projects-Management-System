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
    <link href="../css/widgets.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <link href="../css/xcharts.min.css" rel=" stylesheet">
    <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
  </head>
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
                <a class="" href="../dashboard/corrdinator.php">
                  <i class="icon_house_alt"></i>
                  <span> Dashboard </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="../controller/coordinator_profile.php" class="">
                  <i class="icon_profile"></i>
                  <span>My Profile </span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                  <i class="icon_profile"></i>
                  <span> Manage Users </span>
                </a>
                <ul class="sub">
                  <li><a class="" href="../view/view_students.php"> Students </a></li>
                  <li><a class="" href="../view/view_supervisors.php"> Supervisors </a></li>
                </ul>
              </li>
              <li>
                <a class="" href="#">
                  <i class="icon_profile"></i>
                  <span> Register Users </span>
                </a>
              </li>
              <li>
                <a class="" href="#">
                  <i class="icon_documents_alt"></i>
                  <span> Students' Progress </span>
                </a>
              </li>
              <li>
                <a class="" href="projects.php">
                  <i class="icon_documents_alt"></i>
                  <span> Ongoing Projects</span>
                </a>
              </li>
              <li>
                <a class="" href="../index.html">
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
            <!--overview start-->
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header" style="margin-left: 250px; padding-left: 200px; color: #00a0df;"><u>Students' Details. </u></h3>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-9" style="padding-left: 250px; margin-left: 250px;">
                <button class="btn btn-primary" type="submit"><a href="../controller/register_supervisor.php" style="color: black;">Add</a></button>
                <button type="submit" class="btn btn-primary"><a href="../controller/register_supervisor.php" style="color: black;"> Update </a></button>
              </div>
            </div>
            <div class="panel-body">
              <table cellpadding="50">
                <thead>
                  <tr>
                    <th>#id</th>
                    <th> Student Registration Number</th>
                    <th>Project Title</th>
                    <th>Supervisor Name</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- project team & activity end -->
          </section>
        </section>
        <!--main content end-->
        <div class="text-right">
          <div class="credits">
            <a href="">Students Systems Projects Management System</a>
          </div>
        </div>
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
      <script>
      //knob
      $(function() {
      $(".knob").knob({
      'draw': function() {
      $(this.i).val(this.cv + '%')
      }
      })
      });
      //carousel
      $(document).ready(function() {
      $("#owl-slider").owlCarousel({
      navigation: true,
      slideSpeed: 300,
      paginationSpeed: 400,
      singleItem: true
      });
      });
      //custom select box
      $(function() {
      $('select.styled').customSelect();
      });
      /* ---------- Map ---------- */
      $(function() {
      $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
      regions: [{
      values: gdpData,
      scale: ['#000', '#000'],
      normalizeFunction: 'polynomial'
      }]
      },
      backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code) {
      el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
      }
      });
      });
      </script>
    </body>
  </html>