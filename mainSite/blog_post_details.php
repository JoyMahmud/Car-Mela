<?php
    session_start();
    require_once ('../class/blogPost/blogpost.php');

    /*View Blog Post */
    $blog_post_id = $_GET['id'];
    $obj_blog_post = new Blogpost();
    $query_result = $obj_blog_post->single_view_blog_post_info_by_id($blog_post_id);
    $result = mysqli_fetch_assoc($query_result);

    /*this code for user post in footer and sidebar*/
    $obj_userPost = new Blogpost();
    $user_post_result = $obj_userPost->all_userPost_info_for_footer();

    /*this code for user post picture in footer*/
    $user_post_picture = $obj_userPost->all_userPost_picture_for_footer();

    /*this code for Blog post in right sidebar*/
    $result_for_sidebar = $obj_blog_post->all_blog_post_info_for_sidebar();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Bikroy Mela | Blog Post Details</title>
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
                        <a href="tel:+55-417-634-7071"><i class="fa fa-phone pr-5 pl-10"></i>  +55 4XX-634-7071</a>
                    </li>
                    <li>
                        <a href="mailto:info@themevessel.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i>info@themevessel.com
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
                    <li><a href="blog_post.php" class="active">Our Blog</a></li>
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

<!-- Blog banner start -->
<div class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Blog Post Details</h2>
                <a href="blog_post.php" class="home">Blog Post</a>
                <a class="m0">/</a> 
                <a>blog post details</a>
            </div>
        </div>
    </div>
</div>
<!-- blog banner end-->

<!-- blog body start-->
<div class="blog-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <!-- Blog box start-->
                <div class="thumbnail blog-box clearfix">
                    <img src="<?php $len = strlen($result['post_image']); $img = substr($result['post_image'],18,$len); echo $img;?>" alt="blog-image">
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Title -->
                        <h1 class="title">
                            <a href="blog_post_details.php"><?php echo $result['post_title']?></a>
                        </h1>
                        <!-- Post Materials-->
                        <div class="post-materials">
                            <div class="header">
                                <?php if ( isset($_SESSION['admin_name'])){?>
                                    BY <a href="#"><?php echo $_SESSION['admin_name']; ?></a>
                                <?php }else{?>
                                    BY <a href="#"><?php echo "Unknown" ?></a>
                                <?php } ?>
                                <i class="fa fa-clock-o"></i> <?php echo $result['post_Date']?><i class="fa fa-bars"></i> <a href="#"><?php echo $result['related_topic']?></a> <i class="fa fa-commenting-o"></i> <a href="#">3 Comment</a>
                            </div>
                            <p class="text-justify"><?php echo $result['post_details'];?></p>
                        </div>

                    <div class="clearfix mrg-top">
                        <!-- Tags box start-->
                        <div class="tags-box">
                            <h2 class="title">Tags</h2>
                            <a href="#" class="tags">Travels</a>
                            <a href="#" class="tags">Activity</a>
                            <a href="#" class="tags">Car Dealer</a>
                            <a href="#" class="tags">Journey</a>
                        </div>
                        <!-- Tags box end-->

                        <!-- Blog share start -->
                        <div class="blog-share">
                            <ul>
                                <li class="bordered-right">
                                    <h6>Share:</h6>
                                </li>
                                <li class="bordered-right ">
                                    <a href="#">
                                        <i class="fa fa-facebook color-facebook"></i>
                                    </a>
                                </li>
                                <li class="bordered-right">
                                    <a href="#">
                                        <i class="fa fa-twitter color-twitter"></i>
                                    </a>
                                </li>
                                <li class="bordered-right">
                                    <a href="#">
                                        <i class="fa fa-google-plus color-google"></i>
                                    </a>
                                </li>
                                <li class="bordered-right">
                                    <a href="#">
                                        <i class="fa fa-linkedin color-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest color-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Blog share end -->
                     </div>
                    </div>
                </div>
                <!-- Blog box end-->
   
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
                
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group full-name">
                                    <input type="text" class="input-text" name="fullname" id="fullname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group email address">
                                    <input type="email" class="input-text" name="email" id="email" placeholder="Email Address">
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
            <div class="col-lg-4 col-md-4 col-xs-12">
                <!-- Sidebar start-->
                <div class="blog-sidebar">
                    <!-- Recent news start -->
                    <div class="Recent-news">
                        <h2 class="title">Others Blog Post</h2>
                        <?php foreach ($result_for_sidebar as $all_result_for_sidebar){ ?>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php $len = strlen($all_result_for_sidebar['post_image']); $img = substr($all_result_for_sidebar['post_image'],18,$len); echo $img;?>" alt="blog-image" alt="recent-1">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="blog_post_details.php"><?php echo $all_result_for_sidebar['post_title']?></a>
                                    <div class="line-dec-o"></div>
                                    <span><?php echo $all_result_for_sidebar['post_Date']?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Recent news end -->
                    <div class="clearfix"></div>
                    <!-- Blog tags start -->
                    <div class="blog-tags">
                        <h2 class="title">tags</h2>
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
                    <!-- Blog tags end -->
                    <div class="clearfix"></div>
                    <!-- popular rooms start -->
                    <div class="Recent-news popular-rooms clearfix">
                        <h2 class="title">Recent Selling Car</h2>
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
                    <!-- popular rooms end -->
                    
                    <!-- Dealer contact start-->
                    <div class="dealer-contact">
                        <h2 class="title">Helping Center</h2>
                        <ul>
                            <li>
                                <span>Contact:</span> Person: Alex TM
                            </li>
                            <li>
                                <span>Address:</span> 12 Street, Los Angeles, CA, 94101
                            </li>
                            <li>
                                <span>Phone:</span> <a href="tel:+55-417-634-7071">+55 417 -634-7071</a>
                            </li>
                            <li>
                                <span>Mobile:</span> <a href="tel:+55-417-634-7071">+55 4XX-634-7071</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Dealer contact end-->
                </div>
                <!-- sidebar end-->
            </div>
        </div>
    </div>
</div>
<!-- Blog body end-->

<!-- Footer start-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="../index.php">
                        <img src="img/png/footer-logo.png" alt="logo">
                    </a>
                    <p>Maecenas ne mollis orci. Phasell iacu sapie non aliquet ex euismo ac.</p>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                20/F Green Road, Dhanmondi, Dhaka
                            </a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071"><i class="fa fa-phone"></i>  +55 4XX-634-7071</a>
                        </li>
                        <li>
                            <a href="mailto:info@themevessel.com">
                                <i class="fa fa-envelope-o "></i> info@themevessel.com
                            </a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li>
                            <a href="#" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rss">
                                <i class="fa fa-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="vimeo">
                                <i class="fa fa-vimeo"></i>
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
                <p>&copy;  <?php echo date('Y')?> All Right Reserved By <a href="https://www.facebook.com/joymahmud271" target="_blank">CodeShooter</a></p>
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