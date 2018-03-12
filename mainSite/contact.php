<?php
    require_once ('../class/contactUs/contactUs.php');
    $message = '';

    /*contact us form information insert in database*/
    if(isset($_POST['btn'])){
        $obj_contact_us_form = new ContactUs();
        $message = $obj_contact_us_form->save_contact_us_form_info($_POST);
    }

    /*this code for contact us Address in main content*/
    $obj_contact_us = new ContactUs();
    $contact_address = $obj_contact_us->all_contact_address_info();
    $all_contact_address = mysqli_fetch_assoc($contact_address);

    /*this code for contact us Social Address in main content*/
    $social_address = $obj_contact_us->all_social_address_info();
    $all_social_address = mysqli_fetch_assoc($social_address);

    /*this code for user post in footer and sidebar*/
    $user_post_result = $obj_contact_us->all_userPost_info_for_footer();

    /*this code for user post picture in footer*/
    $user_post_picture = $obj_contact_us->all_userPost_picture_for_footer();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Bikroy Mela | Contact Us</title>
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
                            <i class="fa fa-envelope-o pr-5 pl-10"></i><?php echo $all_contact_address['email']?>
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
                    <li><a href="blog_post.php">Buy Car</a></li>
                    <li><a href="blog_post.php">Our Blog</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="client-feedback.php">Client Feedback</a></li>
                    <li><a href="contact.php" class="active">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<!-- Page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Contact Us</h2>
                    <div class="line-dec"></div>
                    <h5>Feel free to contact us and express your suggestion, opinion & what you want.</h5>
                    <p>
                        <a href="../index.php" class="home-btn">Home</a>
                        <a href="contact.php" class="active-page">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Contact us body start-->
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <!--Success Message -->
                <h3 class="text-center text-success"><?php echo $message; ?></h3>
                <br>
                <!--end -->
                <h2 class="title">Contact Form</h2>
                <div class="contact-form">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group full-name">
                                    <input type="text" class="input-text" name="full_name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group email address">
                                    <input type="text" class="input-text" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group Phone Number"> 
                                    <input type="text" class="input-text" name="phone_number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group your website">
                                    <input type="text" class="input-text" name="your_website" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-btnn">
                                <input type="submit" name="btn" class=" btn btn-message" value="send message">
                            </div>

                        </div>
                    </form>     
                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-xs-12">
                <!-- contact details start-->
                <div class="contact-details">
                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5>Address</h5>
                            <p><?php echo $all_contact_address['address']?></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>Phone</h5>
                            <p><span>Mobile:</span> <a href="#"> <?php echo $all_contact_address['mobile']?></a></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>Email</h5>
                            <p>
                               <span>office:</span><a href="mailto:info@themevessel.com"> <?php echo $all_contact_address['email']?></a>
                            </p>

                        </div>
                    </div>
                </div>
                <!-- contact details end-->
                
                <!-- share start-->
                <div class="share">
                    <h2>Connect With Us</h2>
                    <ul class="social-list">
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
                <!-- share end-->
            </div>
        </div>
    </div>
</div>
<!-- Contact us body end-->

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
                                        <img class="media-object" src="assets/image/<?php echo $all_user_post_result['car_image'];?>" alt="car-image">
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
                                <a href="#"><img src="assets/image/<?php echo $all_user_post_picture['car_image'];?>" alt="car-img"></a>
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