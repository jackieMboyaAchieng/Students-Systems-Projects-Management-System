<?php include ('../include/database.php') ?>
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
                <a class="" href="../dashboard/student.php">
                  <i class="icon_house_alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="student_profile.php" class="">
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
                  <li><a href="../view/display_journal.php"> Project Journal </a></li>
                  <li><a class="" href="proposal.php"> Project Proposal </a></li>
                  <li><a class="" href="srs.php"> SRS </a></li>
                  <li><a class="" href="sdd.php"> SDD </a></li>
                  <li><a  class="" href="test_plan.php"> Test Plan </a></li>
                  <li><a class="" href="user_manual.php"> User Manual </a></li>
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
                <h3 class="page-header"><i class="icon_document_alt"></i> Project Proposal </h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="student.php">Home</a></li>
                  <li><i class="icon_document_alt"></i> <a href="proposal.php"> Project Proposal </a></li>
                </ol>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-12">
                <section class="panel">
                  <div class="panel-body">
                    <form class="form-horizantal" action="../include/server.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="col-md-6"> Student Registration Number </label>
                          <?php
                          // echo "hello there".$_SESSION['username'];
                          // $my_query = "  select project_document.document_id, project_document.student_reg_no, project_document.document_name, project_document.file_name, project_document.submission_date FROM project_document JOIN users ON users.lecturer_username=3458";
                          $db = new DBconnect();
                          $conn=$db->connect();
                          $student_reg_no = $_SESSION['username'];
                          $query=$conn->prepare("select student_reg_no from student_details where username='$student_reg_no'");
                          $query->execute([]);
                          // print_r($query);
                          if($query ->rowCount() > 0 ){
                          while ($row=$query->fetch() ) {
                          echo "
                          <input type='text' name='student_reg_no' class='form-control' value=".$row['student_reg_no'].">";
                          }
                          }
                          ?>
                          
                        </div>
                        <div class="col-lg-6">
                          <label class="col-md-6"> Document Name </label>
                          <input type="text" name="document_name" class="form-control">
                        </div>
                      </div><br><br>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="col-md-6">Document Version </label>
                          <input type="text" name="document_version" class="form-control">
                        </div>
                        <div class="col-lg-6">
                          <label class="col-md-6">Supervisor Username </label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div><br><br>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="col-md-6">Comments: </label>
                          <textarea class="form-control" maxlength="" name="comments">Write your comment here!</textarea>
                        </div>
                        <div class="col-lg-6">
                          <label class="col-md-6">Browse your device to choose a file: </label>
                          <input type="file" name="file_name" class="">
                        </div>
                      </div> <br>
                      <div class="row">
                        <div class="col-lg-6">
                          <button type="submit" class="btn btn-primary" value="submit" name="submit"> Submit </button>
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
            <a href="https://bootstrapmade.com/">Students Systems Projects Management System</a>
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