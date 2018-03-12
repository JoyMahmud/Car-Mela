<?php
    session_start();
    if($_SESSION['user_id'] == null){
        header('Location: ../login.php');
    }

    if(isset($_GET['logout'])){
        require_once('../../class/userLogin/login.php');
        $obj_login = new Login();
        $obj_login->user_logout();
    }

    require_once('../../class/userPost/userpost.php');
    $obj_userPost = new Userpost();
    /*this code for user post in footer*/
    $user_post_result = $obj_userPost->all_userPost_info_for_footer();

    /*this code for user post picture in footer*/
    $user_post_picture = $obj_userPost->all_userPost_picture_for_footer();

    /*this code for contact us Address in main content*/
    $contact_address = $obj_userPost->all_contact_address_info();
    $all_contact_address = mysqli_fetch_assoc($contact_address);

    /*this code for contact us Social Address in main content*/
    $social_address = $obj_userPost->all_social_address_info();
    $all_social_address = mysqli_fetch_assoc($social_address);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Bikroy Mela | HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">


    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.5.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="mainSite/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Top header start -->
<header class="top-header hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline">
                    <li>
                        <a href="tel:+55-417-634-7071"><i class="fa fa-phone pr-5 pl-10"></i>  +880 1737113815</a>
                    </li>
                    <li>
                        <a href="mailto:info@themevessel.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i>joymahmud271@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="top-buttons">
                    <a href="?logout=logout" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-user pr-10"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start-->
<div class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-logo" href="../../index.php">
                    <img src="../img/png/logo.png" alt="CAR HOUSE">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="userDashboard.php" class="active">Home</a></li>
                    <li><a href="add_post.php">Add Post</a></li>

                    <li class="dropdown">
                        <a href="../car_buy.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Post<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../car_buy.php">Car List (Right Sidebar)</a></li>
                            <li><a href="../car_grid.php">Car Grid (Right Sidebar)</a></li>
                            <li><a href="../car_details.php">Car Details</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well" style="margin: 150px 0 150px 0">
                <h2 class="text-center text-success">Welcome Mr. <?php echo $_SESSION['first_name']?></h2>
                <h3 class="text-center text-info">This is your Dashboard. From here you can do your Activities.</h3>
            </div>
        </div>
    </div>
</div>





<!-- Footer start-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="../../index.php">
                        <img src="../img/png/footer-logo.png" alt="logo">
                    </a>
                    <br><br>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                <?php echo $all_contact_address['address']?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $all_contact_address['mobile']?>"><i class="fa fa-phone"></i>  <?php echo $all_contact_address['mobile']?></a>
                        </li>
                        <li>
                            <a href="mailto:info@themevessel.com">
                                <i class="fa fa-envelope-o "></i> <?php echo $all_contact_address['email']?>
                            </a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li>
                            <a href="<?php echo $all_social_address['facebook']?>" target="_blank" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $all_social_address['twitter']?>" target="_blank" class="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $all_social_address['linkedin']?>" target="_blank" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $all_social_address['googleplus']?>" target="_blank" class="google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>What we offer ?</h2>
                    <div class="line-dec"></div>
                    <ul>
                        <li>
                            <a href="#">Rent a car now</a>
                        </li>
                        <li>
                            <a href="#">Search for sale</a>
                        </li>
                        <li>
                            <a href="#">Best daily dealers</a>
                        </li>
                        <li>
                            <a href="#">Weekly lucky person</a>
                        </li>
                        <li>
                            <a href="#">Change car color</a>
                        </li>
                        <li>
                            <a href="#">Rent a car now</a>
                        </li>

                        <li>
                            <a href="#">Best daily dealers</a>
                        </li>
                        <li>
                            <a href="#">Change car color</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>tags</h2>
                    <div class="line-dec"></div>
                    <a href="#" class="tags">Apps</a>
                    <a href="#" class="tags">gallery</a>
                    <a href="#" class="tags">photography</a>
                    <a href="#" class="tags">Web</a>
                    <a href="#" class="tags">blog right sidebar</a>
                    <a href="#" class="tags">books</a>
                    <a href="#" class="tags">business</a>
                    <a href="#" class="tags">design</a>
                    <a href="#" class="tags">education</a>
                    <a href="#" class="tags">Fitness</a>
                    <a href="#" class="tags">pen</a>
                    <a href="#" class="tags">real</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>Recent motors</h2>
                    <div class="line-dec"></div>
                    <?php foreach ($user_post_result as $all_user_post_result){ ?>
                        <div class="media">
                            <div class="media-left">
                                <a href="../car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>">
                                    <img class="media-object" src="../assets/image/<?php echo $all_user_post_result['car_image']?>" alt="car-image">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="../car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>"><?php echo $all_user_post_result['car_name']?></a>
                                <div class="line-dec-o"></div>
                                <span>৳ <?php echo $all_user_post_result['car_price']?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-item ">
                <div class="footer-item-content">
                    <h2>Gallery</h2>
                    <div class="line-dec"></div>
                        <?php foreach ($user_post_picture as $all_user_post_picture){ ?>
                            <div class="gallery-item">
                                <!--<a href="#"><img src="mainSite/<?php /*$len = strlen($all_user_post_picture['car_image']); $image = substr($all_user_post_picture['car_image'],3,$len); echo $image;*/?>" alt="car-img"></a>-->
                                <a href="#"><img src="../assets/image/<?php echo $all_user_post_picture['car_image']?>" alt="car-img"></a>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end-->

<!-- Sub footer start-->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p>&copy;  2017 All Right Reserved By <a href="#">CodeShooter</a></p>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs ">
                <ul>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="../about.php">About Us</a>
                    </li>
                    <li>
                        <a href="../car_buy.php">Car Listing</a>
                    </li>
                    <li>
                        <a href="../../index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end-->

<script src="../js/jquery-2.2.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="../js/app.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83150110-3', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>