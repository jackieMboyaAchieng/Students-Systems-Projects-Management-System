<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../img/favicon.png">
    <title>Login Page | Student Systems Project Management System </title>
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body class="login-img3-body" style="background-image: url(../img/hero_1.jpg);">
    <div class="container">
      <form class="login-form" action="../include/server.php" method="post" style="box-shadow: 1px 1px 1px 1px; border-radius: 25px;">
        <div class="login-wrap">
          <p class="login-img"><i class="">Register</i></p>
          <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" autofocus="autofocus">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" autofocus="autofocus">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="text" name="email" id="email" class="form-control" placeholder="Emaill-Address" autofocus="autofocus">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="text" name="staffno" id="staffno" class="form-control" placeholder="Staff-Number" autofocus="autofocus">
          </div>
          <div class="input-group">
            <span class="input-group-addon"></span>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus="autofocus">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" autofocus="autofocus">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class=""></i></span>
            <input type="password" name="password_1" class="form-control" id="password" placeholder="Confirm-Password" autofocus="autofocus">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="reg_user" value="reg_user">Register</button>
        </div>
      </form>
    </div>
    <script type="text/javascript">
    function validate(){
    var $valid = true;
    document.getElementById("firstname").innerHTML = "";
    document.getElementById("lastname").innerHTML = "";
    document.getElementById("email").innerHTML = "";
    document.getElementById("staffno").innerHTML = "";
    document.getElementById("username").innerHTML = "";
    document.getElementById("password").innerHTML = "";
    document.getElementById("password_1").innerHTML = "";
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var staffno = document.getElementById("staffno").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var password_1 = document.getElementById("password_1").value;
    if (firstname == "") {
    document.getElementById("firstname").innerHTML = "required";
    $valid = false;
    }
    if (lastname == "") {
    document.getElementById("lastname").innerHTML = "required";
    $valid = false;
    }
    if (email == "") {
    document.getElementById("email").innerHTML = "required";
    $valid = false;
    }
    if (staffno == "") {
    document.getElementById("staffno").innerHTML = "required";
    $valid = false;
    }
    if (username == "") {
    document.getElementById("username").innerHTML = "required";
    $valid = false;
    }
    if (password == "") {
    document.getElementById("password").innerHTML = "required";
    $valid = false;
    }
    if (password_1 == "") {
    document.getElementById("password_1").innerHTML = "required";
    $valid = false;
    }
    return $valid;
    }
    </script>
  </body>
</html>