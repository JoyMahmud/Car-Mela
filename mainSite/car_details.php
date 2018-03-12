<?php
require_once ('../class/userPost/userpost.php');

    /*View User Post */
    $userPost_id = $_GET['id'];
    $obj_userPost = new Userpost();
    $query_result = $obj_userPost->single_view_userPost_info_by_id($userPost_id);
    $result = mysqli_fetch_assoc($query_result);

    /*this code for user post in footer*/
    $obj_userPost = new Userpost();
    $user_post_result = $obj_userPost->all_userPost_info_for_footer();
    $post_result = mysqli_fetch_assoc($user_post_result); // this code only for car details path..

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
    <title>Car Bikroy Mela | Car Details</title>
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
                    <li><a href="car_buy.php" class="active">Buy Car</a></li>
                    <li><a href="blog_post.php">Our Blog</a></li>
                    <li><a href="about.php">About Us</a></li>
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

<!-- Page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Choose Your Dream Car</h2>
                    <div class="line-dec"></div>
                    <h5>We Are Here To FullFil Your Dream</h5>
                    <p>
                        <a href="../index.php" class="home-btn">Home</a>
                        <a href="car_details.php?id=<?php echo $post_result['user_post_id'] ?>" class="active-page">Car Details</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Car details start-->
<div class="car-details content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-heading">
                                <i class="fa fa-car"></i>
                                <h2>Recent Selling Car</h2>
                                <div class="border"></div>
                                <h4>Details of Your Dream Car</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                            <div class="car-details-header-price">
                                <h3>৳ <?php echo $result['car_price']?></h3>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="car-detail-slider">
                    <div class="item">
                        <img src="assets/image/<?php echo $result['car_image']?>" alt="car-image">
                    </div>
                </div>

                <div class="clearfix"></div>
                
                <!-- Car details content body start -->
                <div class="car-details-content-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#carOverview" data-toggle="tab" aria-expanded="true">Car Overview</a></li>
                        <li class=""><a href="#carDetailsOption" data-toggle="tab" aria-expanded="false">Car Details Option</a></li>
                    </ul>
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="carOverview">
                                    <p class="text-justify"><?php echo $result['car_details']?></p>
                                </div>

                                <div class="tab-pane fade technical" id="carDetailsOption">
                                    <ul>
                                        <li>
                                           Car ID:<span><?php echo $result['user_post_id']?></span>
                                        </li>
                                        <li>
                                           Car Name:<span><?php echo $result['car_name']?></span>
                                        </li>
                                        <li>
                                            Car Model Year:<span><?php echo $result['car_model']?></span>
                                        </li>
                                        <li>
                                            Car Registration Year:<span><?php echo $result['car_registration']?></span>
                                        </li>
                                        <li>
                                            CNG Status:<span><?php echo $result['cng_status']?></span>
                                        </li>
                                        <li>
                                            CNG Company:<span><?php echo $result['cng_com']?></span
                                        </li>
                                        <li>
                                            Fuel Type:<span><?php echo $result['fuel_type']?></span>
                                        </li>
                                        <li>
                                            Car CC:<span><?php echo $result['car_cc']?></span>
                                        </li>
                                        <li>
                                            Gear Type:<span><?php echo $result['gear']?></span>
                                        </li>
                                        <li>
                                            All Option:<span><?php echo $result['all_option']?></span>
                                        </li>
                                        <li>
                                            Music Media:<span><?php echo $result['music']?></span>
                                        </li>
                                        <li>
                                            Car Serial Number:<span><?php echo $result['serial_number']?></span>
                                        </li>
                                        <li>
                                            Engine Type:<span><?php echo $result['engine']?></span>
                                        </li>
                                        <li>
                                            Car Mileage:<span><?php echo $result['mileage']?></span>
                                        </li>

                                        <li>
                                            Doors Number:<span><?php echo $result['doors']?></span>
                                        </li>
                                        <li>
                                            Car Conditon:<span><?php echo $result['condtion']?></span>
                                        </li>
                                        <li>
                                            Passenger Capacity:<span><?php echo $result['passenger']?></span>
                                        </li>
                                        <li>
                                            Car Color:<span><?php echo $result['color']?></span>
                                        </li>
                                        <li>
                                            Car Others Have:<span><?php echo $result['others']?></span>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car details content body end -->

                <!-- Comments box start -->
                <div class="comments-box">
                    <h2 class="title">Comments Section</h2>
                    <div class="comments-container">
                        <ul class="blog-post-comments">
                            <li>                    
                                <span class="user-image"><i class="fa fa-user"></i></span>
                                <span class="user-name">Sam Carlos</span>
                                <span class="date"><i class="fa fa-clock-o"></i>01.12.2016</span>
                                <span class="comment">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                </span>

                                <div class="comment-footer">
                                    <a class="share-box"><span class="like"><i class="fa fa-heart"></i>Like</span></a>
                                    <a class="share-box"><span class="respond"><i class="fa fa-comment"></i>Respond</span></a>
                                    <a class="share-box"><span class="share-2"><i class="fa fa-share-alt"></i>Share</span></a>
                                </div>
                            </li>

                            <li>
                                <span class="user-image"><i class="fa fa-user"></i></span>
                                <span class="user-name">Sam Carlos</span>
                                <span class="date"><i class="fa fa-clock-o"></i>01.12.2016</span>
                                <span class="comment">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                </span>

                                <div class="comment-footer">
                                    <a class="share-box"><span class="like"><i class="fa fa-heart"></i>Like</span></a>
                                    <a class="share-box"><span class="respond"><i class="fa fa-comment"></i>Respond</span></a>
                                    <a class="share-box"><span class="share-2"><i class="fa fa-share-alt"></i>Share</span></a>
                                </div>
                            </li>

                            <li>
                                <ul>
                                    <li>
                                        <span class="user-image"><i class="fa fa-user"></i></span>
                                        <span class="user-name">Sam Carlos</span>
                                        <span class="date"><i class="fa fa-clock-o"></i>01.12.2016</span>
                                        <span class="comment">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        </span>

                                        <div class="comment-footer">
                                            <a class="share-box"><span class="like"><i class="fa fa-heart"></i>Like</span></a>
                                            <a class="share-box"><span class="respond"><i class="fa fa-comment"></i>Respond</span></a>
                                            <a class="share-box"><span class="share-2"><i class="fa fa-share-alt"></i>Share</span></a>
                                        </div>                    
                                    </li>
                                </ul>
                            </li>
                  
                            <li>                    
                                <span class="user-image"><i class="fa fa-user"></i></span>
                                <span class="user-name">Sam Carlos</span>
                                <span class="date"><i class="fa fa-clock-o"></i>01.12.2016</span>
                                <span class="comment">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                </span>

                                <div class="comment-footer">
                                    <a class="share-box"><span class="like"><i class="fa fa-heart"></i>Like</span></a>
                                    <a class="share-box"><span class="respond"><i class="fa fa-comment"></i>Respond</span></a>
                                    <a class="share-box"><span class="share-2"><i class="fa fa-share-alt"></i>Share</span></a>
                                </div>                    
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Comments box end -->
                <div class="clearfix"></div>
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form" action="http://car-house.sohelrana.me/index.html" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group full-name">
                                    <input type="text" class="input-text" name="full-name" id="full-name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group email address">
                                    <input type="text" class="input-text" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group Phone Number"> 
                                    <input type="text" class="input-text" name="phone-number" id="phone-number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea id="message" class="input-text" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group send-message">
                                    <input type="submit" name="sent message" class=" btn btn-message" value="send message">
                                </div>
                            </div>
                        </div>
                    </form>     
                </div>
                <!-- Contact form end -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Car sidebar right Start-->
                <div class="car-sidebar-right">
                    <!-- Car detail block Start-->
                    <div class="car-detail-block mrg-b-30">
                        <div class="section-heading">
                            <i class="fa fa-search-plus"></i>
                            <h2>Car specifications</h2>
                            <div class="border"></div>
                            <h4>Check the car specifications</h4>
                        </div>
                        <h2 class="title">Car Detials</h2>
                        <ul class="car-detail-info-list">
                            <li>
                                <span>Car ID:</span><?php echo $result['user_post_id']?>
                            </li>
                            <li>
                                <span>Car Name:</span><?php echo $result['car_name']?>
                            </li>
                            <li>
                                <span>Car Model Year:</span><?php echo $result['car_model']?>
                            </li>
                            <li>
                                <span>Car Registration Year:</span><?php echo $result['car_registration']?>
                            </li>
                            <li>
                                <span>CNG Status:</span><?php echo $result['cng_status']?>
                            </li>
                            <li>
                                <span>CNG Company:</span><?php echo $result['cng_com']?>
                            </li>
                            <li>
                                <span>Fuel Type:</span><?php echo $result['fuel_type']?>
                            </li>
                            <li>
                                <span>Car CC:</span><?php echo $result['car_cc']?>
                            </li>
                            <li>
                                <span>Gear Type:</span><?php echo $result['gear']?>
                            </li>
                            <li>
                                <span>All Option:</span><?php echo $result['all_option']?>
                            </li>
                            <li>
                                <span>Music Media:</span><?php echo $result['music']?>
                            </li>
                            <li>
                                <span>Car Serial Number:</span><?php echo $result['serial_number']?>
                            </li>
                            <li>
                                <span>Engine Type:</span><?php echo $result['engine']?>
                            </li>
                            <li>
                                <span>Car Mileage:</span><?php echo $result['mileage']?>
                            </li>

                            <li>
                                <span>Doors Number:</span><?php echo $result['doors']?>
                            </li>
                            <li>
                                <span>Car Conditon:</span><?php echo $result['condtion']?>
                            </li>
                            <li>
                                <span>Passenger Capacity:</span><?php echo $result['passenger']?>
                            </li>
                            <li>
                                <span>Car Color:</span><?php echo $result['color']?>
                            </li>
                            <li>
                                <span>Car Others Have:</span><?php echo $result['others']?>
                            </li>
                        </ul>
                    </div>
                    <!-- Car detail block end-->

                    <div class="clearfix"></div>

                    <!-- Dealer contact Start-->
                    <div class="dealer-contact mrg-b-30">
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
                    </div>
                    <!-- Dealer contact End-->

                    <div class="clearfix"></div>

                    <!-- Share Start-->
                    <div class="share mrg-b-30">
                        <h2>Connect With Us</h2>
                        <div class="clearfix"></div>
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
                    <!-- Share End-->

                    <div class="clearfix"></div>

                    
                    <!-- Recent news Start-->
                    <div class="Recent-news">
                        <h2 class="title">Recent Selling Cars</h2>
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
                    <!-- Recent news End-->
                </div>
                <!-- Car sidebar right end-->
            </div>
        </div>
    </div>
</div>
<!-- Car details start-->

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
                <p>&copy; <?php echo date('Y')?> All Right Reserved By <a href="https://www.facebook.com/joymahmud271">CodeShooter</a></p>
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