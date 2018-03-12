<?php
    require_once ('class/userPost/userpost.php');

    /*this code for user post*/
    $obj_userPost = new Userpost();
    $result = $obj_userPost->all_userPost_info();

    require_once('class/userPost/feedback.php');
    /*this code for client Feedback*/
    $obj_feedback = new Feedback();
    $feedback_result = $obj_feedback->all_clientFeedback_info();

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

    <!--
                @@@@@@@@@@@@@    @@@@@@@@@@@@@@@     @             @
                            @    @             @      @           @
                            @    @             @       @         @
                            @    @             @        @       @
                            @    @             @         @     @
                            @    @             @          @   @
                            @    @             @           @ @
                  @         @    @             @           @ @
                  @         @    @             @           @ @
                  @@@@@@@@@@@    @@@@@@@@@@@@@@@           @ @

    -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="mainSite/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="mainSite/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="mainSite/css/slider.css">
    <link rel="stylesheet" type="text/css" href="mainSite/css/font-awesome-4.5.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="mainSite/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="mainSite/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="mainSite/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="mainSite/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="mainSite/js/html5shiv.min.js"></script>
    <script src="mainSite/js/respond.min.js"></script>
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
                        <a href="mailto:joymahmud271@gmail.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i><?php echo $all_contact_address['email']?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="top-buttons">
                    <a href="mainSite/signup.php" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-user pr-10"></i> Sign Up</a>
                    <a href="mainSite/login.php" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-lock pr-10"></i> Login</a>
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
                <a class="navbar-brand-logo" href="index.php">
                    <img src="mainSite/img/png/logo.png" alt="CAR HOUSE">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="mainSite/car_buy.php">Buy Car</a></li>
                    <li><a href="mainSite/blog_post.php">Our Blog</a></li>
                    <li><a href="mainSite/about.php">About Us</a></li>
                    <li><a href="mainSite/client-feedback.php">Client Feedback</a></li>
                    <li><a href="mainSite/contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<!-- banner start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active item-1">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <h1>WE ARE HERE FOR YOU</h1>
                        <h2>Fill Up Your Dream</h2>
                        <h4>Take a, High Gorgeous, &amp; Mindblowing<br>Outstanding Technologiful Car</h4>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="container">
                        <div class="banner-slider-inner-1">
                        <h1>Explore <span>Your Dream</span></h1>
                        <h4>Your Comfortness is Our Satisfaction</h4>
                        <div class="Website-text">Car Bikroy Mela LTD.</div>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                     <div class="banner-slider-inner-1">
                        <h1><span>Our Car</span><br>Gives you Happiness</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="slider-mover-left" aria-hidden="true">
             <img src="mainSite/img/png/left-chevron.png" alt="left-chevron">
          </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="mainSite/img/png/right-chevron.png" alt="right-chevron">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- banner end-->

<!-- Recent car start-->
<div class="recent-car content-area">
    <div class="container">
        <div class="recent-car-content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <i class="fa fa-car"></i>
                        <h2>Recent Selling cars</h2>
                        <div class="border"></div>
                        <h4>Choose Your Dream car</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($result as $all_result){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail car-box">
                            <!--<img src="mainSite/<?php /*$len = strlen($all_result['car_image']); $image = substr($all_result['car_image'],3,$len); echo $image;*/?>" alt="car-image" height="700" width="700">-->
                            <img src="mainSite/assets/image/<?php echo $all_result['car_image']?>" alt="car-image" height="700" width="700">
                            <div class="caption car-content">
                                <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                    <h3>
                                        <a href="mainSite/car_details.php?id=<?php echo $all_result['user_post_id'] ?>"><?php echo $all_result['car_name']; ?></a>
                                        <span> ৳ <?php echo $all_result['car_price']?></span>
                                    </h3>
                                </div>

                                <p class="text-justify"><?php echo substr($all_result['car_details'],0,150)." ...";?></p>
                                <!--<div class="car-tags">
                                    <ul>
                                        <li>2017</li>
                                        <li>Bensin</li>
                                        <li>Sport</li>
                                        <li>12.888m</li>
                                    </ul>
                                </div>-->
                                <div class="ster-fa">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                </div>
                                <a href="mainSite/car_details.php?id=<?php echo $all_result['user_post_id'] ?>" class="btn details-button">Details</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<!-- Recent car end-->

<!-- Testimonials start-->
<div class="testimonials">
    <div class="col-lg-12">
        <div id="carouse2-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $i =0; foreach ($feedback_result as $all_feedback_result){  if($i==0){ ?>
                <li data-target="#carouse2-example-generic" data-slide-to="<?php echo $i;?>" class="active"></li>
                <?php }else{ ?>
                <li data-target="#carouse2-example-generic" data-slide-to="<?php echo $i;?>"></li>
                <?php } $i++; }?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php $i =0; foreach ($feedback_result as $all_feedback_result){  ?>
                    <?php if($i==0){?>
                <div class="item active">
                    <?php }else{?>
                <div class="item">
                    <?php }?>
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 testimonials-inner">
                                <h3 class="text-success">What Our Client Say</h3>
                                <div class="line-dec"></div>
                                    <p>
                                        <em>"</em>
                                        <?php echo $all_feedback_result['feeadback_message']?>
                                        <em>"</em>
                                    </p>
                                    <div class="author-rate">
                                        <img src="mainSite/<?php echo $all_feedback_result['client_image']?>" alt="client_feedback_image">
                                        <h4><?php echo $all_feedback_result['client_name']?></h4>
                                        <div class="line-dec2"></div>
                                        <span><?php echo $all_feedback_result['client_type']?></span>
                                    </div>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carouse2-example-generic" role="button" data-slide="prev">
              <span class="slider-mover-left" aria-hidden="true">
                 <img src="mainSite/img/png/left-chevron.png" alt="left-chevron">
              </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouse2-example-generic" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <img src="mainSite/img/png/right-chevron.png" alt="right-chevron">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Testimonials end-->

<!-- Footer start-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="index.php">
                        <img src="mainSite/img/png/footer-logo.png" alt="logo">
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
                                    <a href="mainSite/car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>">
                                        <img class="media-object" src="mainSite/assets/image/<?php echo $all_user_post_result['car_image']?>" alt="car-image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="mainSite/car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>"><?php echo $all_user_post_result['car_name']?></a>
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
                            <a href="#"><img src="mainSite/assets/image/<?php echo $all_user_post_picture['car_image']?>" alt="car-img"></a>
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
                        <a href="mainSite/contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="mainSite/about.php">About Us</a>
                    </li>
                     <li>
                        <a href="mainSite/car_buy.php">Car Listing</a>
                    </li>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end-->

<script src="mainSite/js/jquery-2.2.0.min.js"></script>
<script src="mainSite/js/bootstrap.min.js"></script>
<script src="mainSite/js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="mainSite/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="mainSite/js/app.js"></script>

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