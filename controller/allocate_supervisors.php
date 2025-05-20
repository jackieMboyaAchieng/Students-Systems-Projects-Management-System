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
    <title>Profile | Students' Systems Project Management System. </title>
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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <body>
      <!-- container section start -->
      <section id="container" class="">
        <!--header start-->
        <header class="header dark-bg">
          <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
          </div>
          <!--logo start-->
          <a href="#" class="logo"><span class="lite"> Students' Systems Project Management System. </span></a>
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
                <h3 class="page-header" style="margin-left: 250px; padding-left: 200px; color: #00a0df;"><u> Allocate Supervisor </u></h3>
              </div>
            </div>
            <div class="table">
              <form>
                <table class="table table-bordered table-striped table-hover" style="margin-left: 9px;" id="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Student registration number</th>
                      <th>Project Title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                    <?php
                    $db = new DBconnect();
                    $conn=$db->connect();
                    $query=$conn->prepare("select id, student_name, student_reg_no, project_title from student_details");
                    $query2=$conn->prepare("select username from lecturer_details");
                    $query2->execute([]);
                    $query->execute([]);
                    if($query ->rowCount() > 0 ){
                    while ($row=$query->fetch() ) {
                    echo "<tr>
                      
                      
                      <td>".$row['id']."</td>
                      <td>".$row['student_name']."</td>
                      <td>".$row['student_reg_no']."</td>
                      <td>".$row['project_title']."</td>
                      <td><button type='button' class='btn btn-success'><a href='assign_supervisor.php?id=".$row['id']."'>Assign Supervisor</a></button></td>
                      
                    </tr>";
                    }
                    }
                    ?>
                    
                  </tbody>
                </table>
              </form>
            </div>
            
          </section>
        </section>
      </section>
      <script src ="https://unpkg.com/jquery@3.5.1/dist/jquery.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
      <script>
      $(document).ready(function() {
      $('#table').DataTable();
      } );
      </script>
      <script src="../js/scripts.js"></script>
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