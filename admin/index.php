<?php
session_start();
if (isset($_SESSION['admin_id'])){
    if($_SESSION['admin_id'] != null){
        header('Location:../adminPanel/index.php');
    }
}

if (isset($_POST['btn'])){
    require_once ('../class/adminLogin/login.php');
    $obj_login = new Login();
    $message = $obj_login->admin_login_check($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="../mainSite/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../mainSite/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../mainSite/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../mainSite/css/font-awesome-4.5.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="../mainSite/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../mainSite/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../mainSite/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../mainSite/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../mainSite/js/html5shiv.min.js"></script>
    <script src="../mainSite/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-bg">

<!-- login page body start-->
<div class="login-page-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Form content box start-->
                <div class="form-content-box">
                    <div class="logo-the carhouse  text-center">
                        <a href="../index.php">
                            <img src="../mainSite/img/png/logo.png" alt="logo">
                        </a>
                    </div>
                    <h3 class="text-center text-success">Please use Valid Email and Password</h3><hr>
                    <h3 class="text-center text-danger">
                        <?php
                        if(isset($message)){
                            echo $message;
                        }
                        ?></h3>

                    <form class="login" action="" method="post">
                        <div class="form-group">
                            <label for="email_address">Username or email address*</label>
                            <input type="email" class="input-text" name="email_address" placeholder="Email Address" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password *</label>
                            <input type="password" class="input-text" name="password" placeholder="password" required>
                        </div>

                        <input type="submit" name="btn" class="btn btn-send btn-block" value="Login">

                        <div class="checkbox checkbox-theme checkbox-circle ">
                            <input id="checkbox11" type="checkbox">
                            <label for="checkbox11" class="remember-me">
                                <span>remember me</span>
                            </label>
                            <span class="pull-right lost-password">
                                 <a href="../mainSite/forgot-password.php">Lost your password?</a>
                            </span>
                        </div>
                        <p class="dhc">
                            Don't have account <a href="../mainSite/signup.php">create an account</a>
                        </p>
                    </form>
                </div>
                <!-- Form content box end-->
            </div>
        </div>
    </div>
</div>
<!-- Login page body end-->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-83150110-3', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>