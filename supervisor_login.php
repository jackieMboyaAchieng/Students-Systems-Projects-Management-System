<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Login Page | Student Systems Project Management System </title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
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
  <body class="login-img3-body" style="background-image: url(img/hero_1.jpg);">
    <div class="container">
      <form class="login-form" action="include/server.php" method="post" style="box-shadow: 1px 1px 1px 1px;">
        <div class="login-wrap">
          <p class="login-img"><i class="">Login</i></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          </div>
          <label class="checkbox">
            
            <!-- <span class=""> <a href="reset.php"> Forgot Password?</a></span> -->
          </label>
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="supervisorlogin" value="login">Login</button>
        </div>
      </form>
    </div>
    <script type="text/javascript">
      function validate(){
        var $valid = true;
        document.getElementById("username").innerHTML = "";
        document.getElementById("password").innerHTML = "";

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (username == "") {
          document.getElementById("username").innerHTML = "required";
          $valid = false;
        }
        if (password == "") {
          document.getElementById("password").innerHTML = "required";
          $valid = false;
        }
        return $valid;
      }
    </script>
  </body>
</html>