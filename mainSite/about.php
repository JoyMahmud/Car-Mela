<?php
    require_once ('../class/aboutUs/aboutUs.php');

    /*this code for about us rules in main content*/
    $obj_aboutUs = new AboutUs();
    $rules_result = $obj_aboutUs->all_aboutUs_rules_info();
    $all_result = mysqli_fetch_assoc($rules_result);

    /*this code for choosing us reason in main content*/
    $choose_us_result = $obj_aboutUs->all_choose_us_info();
    $all_choose_us_result = mysqli_fetch_assoc($choose_us_result);

    /*this code for about us Team member in main content*/
    $team_member = $obj_aboutUs->all_team_member_info();

    /*this code for services in main content*/
    $service = $obj_aboutUs->all_service_info();

    /*this code for user post in footer and sidebar*/
    $user_post_result = $obj_aboutUs->all_userPost_info_for_footer();

    /*this code for user post picture in footer*/
    $user_post_picture = $obj_aboutUs->all_userPost_picture_for_footer();

    /*this code for contact us Address in footer*/
    $contact_address = $obj_aboutUs->all_contact_address_info();
    $all_contact_address = mysqli_fetch_assoc($contact_address);

    /*this code for contact us Social Address in footer*/
    $social_address = $obj_aboutUs->all_social_address_info();
    $all_social_address = mysqli_fetch_assoc($social_address);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Bikroy Mela | About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">


    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.5.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

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
                        <a href="tel:+55-417-634-7071"><i class="fa fa-phone pr-5 pl-10"></i>  <?php echo $all_contact_address['mobile']?></a>
                    </li>
                    <li>
                        <a href="mailto:info@themevessel.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i> <?php echo $all_contact_address['email']?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="top-buttons">
                    <a href="signup.php" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-user pr-10"></i> Sign Up</a>
                    <a href="login.php" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-lock pr-10"></i> Login</a>
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
                <a class="navbar-brand-logo" href="../index.php">
                    <img src="img/png/logo.png" alt="CAR HOUSE">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="car_buy.php">Buy Car</a></li>
                    <li><a href="blog_post.php">Our Blog</a></li>
                    <li><a href="about.php" class="active">About Us</a></li>
                    <li><a href="client-feedback.php">Client Feedback</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<!-- page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>About Car Bikroy Mela Ltd.</h2>
                    <div class="line-dec"></div>
                    <h5>Know About us and also know about our Car Bikroy Mela Ltd.</h5>
                    <p>
                        <a href="../index.php" class="home-btn">Home</a>
                        <a href="#" class="active-page">About us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page banner end -->

<!-- About body start-->
<div class="about-body">
    <!-- Page section start-->
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">Car Bikroy Mela Rules & Regulation</h2>
                    <p class="text-justify"><?php echo $all_result['rules_details']?></p>

                    <!-- Icon list -->
                    <ul class="icon-list">
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_result['rules_one']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_result['rules_two']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_result['rules_three']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_result['rules_four']?>
                        </li>
                    </ul>

                    <a href="contact.php" class="btn btn-contact">Contact us</a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="car-video-frame">
                        <iframe src="<?php echo $all_result['video']?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page section end-->

    <!-- Page Section start-->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">Why Choose Us</h2>
                    <p class="text-justify"><?php echo $all_choose_us_result['choose_details']?></p>
                    <!-- Icon list -->
                    <ul class="icon-list">
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_choose_us_result['reason_one']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_choose_us_result['reason_two']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_choose_us_result['reason_three']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_choose_us_result['reason_four']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_choose_us_result['reason_five']?>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <?php echo $all_choose_us_result['reason_six']?>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">More Info</h2>
                    <div class="panel-div">
                        <div class="panel-group" id="accordion" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-plus"></i>Fair Price for Everyone
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="panel-body">
                                        <p>Curabitur libero. Donec facilisis velit est. Phasellus consquat. Aenean vitae quam. Vivam etl nunc. Nunc con sequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-plus"></i>Large Number of Vehicles
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                   <div class="panel-body">
                                        <p>Curabitur libero. Donec facilisis velit est. Phasellus consquat. Aenean vitae quam. Vivam etl nunc. Nunc con sequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingfive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            <i class="fa fa-plus"></i>Auto Loan Available
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                    <div class="panel-body">
                                        <p>Curabitur libero. Donec facilisis velit est. Phasellus consquat. Aenean vitae quam. Vivam etl nunc. Nunc con sequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Page Section end-->
    
    <!-- About team meet start-->
    <section class="about-team-meet">
        <div class="container">
            <div class="title text-center">Meet The Team Member of Car Bikroy Mela Ltd.</div>
            <div class="row mrg-t-20">
                <?php foreach ($team_member as $all_team_member){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                    <div class="thumbnail about-box clearfix">
                        <img src="<?php $len=strlen($all_team_member['member_image']); $img=substr($all_team_member['member_image'],18,$len); echo $img;?>" alt="jason.jpg" class="img-responsive">
                        <div class="caption content">
                            <h6><?php echo $all_team_member['member_designation']?></h6>
                            <div class="header b-items-cars-one-info-header  s-lineDownLeft">
                                <h3>
                                    <?php echo $all_team_member['member_name']?>
                                </h3>
                            </div>
                            <p class="text-justify">
                                <?php echo $all_team_member['member_sort_desc']?>
                            </p>
                            <ul class="social-list">
                                <li>
                                    <a href="<?php echo $all_team_member['facebook_link']?>" class="facebook" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $all_team_member['twitter_link']?>" class="twitter" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $all_team_member['linkedin_link']?>" class="linkedin" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $all_team_member['googleplus_link']?>" class="google" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- About team meet end-->
</div>
<!-- About body end-->


<!-- Serviceslist start-->
<div class="serviceslist text-center">
    <div class="container">
        <div class="title text-center">Our Services</div>
        <div class="row">

            <?php foreach ($service as $all_service){ ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="Services-box">
                        <i class="<?php echo $all_service['service_icon']?>"></i>
                        <h3><?php echo $all_service['service_title']?></h3>
                        <p><?php echo $all_service['service_desc']?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Serviceslist end-->

<!-- Footer start-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="../index.php">
                        <img src="img/png/footer-logo.png" alt="logo">
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
                                    <a href="car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>">
                                        <img class="media-object" src="assets/image/<?php echo $all_user_post_result['car_image']?>" alt="car-image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>"><?php echo $all_user_post_result['car_name']?></a>
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
                                <a href="#"><img src="assets/image/<?php echo $all_user_post_picture['car_image']?>" alt="car-img"></a>
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
                <p>&copy;  <?php echo date('Y')?> All Right Reserved By <a href="https://www.facebook.com/joymahmud271">CodeShooter</a></p>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs ">
                <ul>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                     <li>
                        <a href="car_buy.php">Car Listing</a>
                    </li>
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end-->

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="js/app.js"></script>
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