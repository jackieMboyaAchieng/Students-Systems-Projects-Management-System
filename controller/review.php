<!-- <?php
//include ('../include/database.php');
//include ('../include/server.php');
//session_start();
//$document_id = $_GET['document_id'];
//$db = new DBconnect();
//$conn=$db->connect();
//$query=$conn->prepare("select student_reg_no, project_title from student_details where document_id=$document_id");
//$query->execute([]);
//echo $data;
//if($query ->rowCount() > 0 ){
// $row=$query->fetch();
//     $student_name = $row['student_name'];
//     $student_reg_no = $row['student_reg_no'];
//     $project_title = $row['project_title'];
// }
?> -->
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
              <h3 class="page-header"><i class="icon_profile"></i> Review </h3>
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
                          <label class="col-md-6"> Student Name </label>
                          <input type="text" name="student_reg_no" class="form-control" value="">
                        </div>
                        <div class="col-lg-6">
                          <label class="col-md-6">Document name </label>
                          <input type="text" name="document_name" class="form-control" value="">
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="col-md-6">Lecturer username </label>
                          <input type="text" name="username" class="form-control" value="">
                        </div>
                        <div class="col-lg-6">
                          <label class="col-md-6">Comments: </label>
                          <textarea class="form-control" name="comments">Write your comment here!</textarea>
                        </div>
                      </div> <br>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="col-md-6"> Browse file to upload </label>
                          <input type="file" name="file_name" class="form-control" value="">
                        </div>
                        <div class="col-lg-6">
                          <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" name="save2" value="save2"> Save </button>
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