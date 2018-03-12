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

    /*User Post information save in the database*/
    $message = '';
    if(isset($_POST['btn'])){
        require_once('../../class/userPost/userpost.php');

        $fuel_type=$_POST['fuel_type'];
        $commaSeparatedFuelType=implode(",",$fuel_type);
        $_POST['fuel_type']=$commaSeparatedFuelType;

        $others=$_POST['others'];
        $commaSeparatedOthers=implode(",",$others);
        $_POST['others']=$commaSeparatedOthers;


        $obj_userPost = new Userpost();
        $message = $obj_userPost->save_userPost_info($_POST);
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
                    <li><a href="userDashboard.php">Home</a></li>
                    <li><a href="add_post.php" class="active">Add Post</a></li>

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
        <div class="col-lg-12">
            <!--Success Message -->
            <h3 class="text-center text-success"><?php echo $message; ?></h3>
            <br>
            <!--end -->
            <div class="well" style="margin-top: 20px">
                <h3 class="text-center text-success">Enter Your Car Information Here</h3><br>

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="car_name" class="col-sm-2 control-label">Car Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="car_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="car_price" class="col-sm-2 control-label">Car Price</label>
                        <div class="col-sm-8">
                            <input type="text" name="car_price" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="car_details" class="col-sm-2 control-label">Car Details</label>
                        <div class="col-sm-8">
                            <textarea name="car_details" class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="car_model" class="col-sm-2 control-label">Car Model Year</label>
                        <div class="col-sm-8">
                            <input type="text" name="car_model" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="car_registration" class="col-sm-2 control-label">Car Registration Year</label>
                        <div class="col-sm-8">
                            <input type="text" name="car_registration" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cng_status" class="col-sm-2 control-label">CNG Status</label>
                        <div class="col-sm-1">
                            <input type="radio" name="cng_status" value="Yes" checked> Yes
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="cng_status" value="No"> No
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cng_com" class="col-sm-2 control-label">CNG Company</label>
                        <div class="col-sm-1">
                            <input type="radio" name="cng_com" value="Navana" checked> Navana
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="cng_com" value="Southern"> Southern
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="cng_com" value="Others"> Others
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="fuel_type[]" class="col-sm-2 control-label">Fuel Type</label>
                        <div class="col-sm-1">
                            <input type="checkbox" name="fuel_type[]" value="Gas" checked> Gas
                        </div>
                        <div class="col-sm-1">
                            <input type="checkbox" name="fuel_type[]" value="Diesel"> Diesel
                        </div>
                        <div class="col-sm-1">
                            <input type="checkbox" name="fuel_type[]" value="Octen"> Octen
                        </div>
                        <div class="col-sm-1">
                            <input type="checkbox" name="fuel_type[]" value="Others"> Others
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="car_cc" class="col-sm-2 control-label">Car CC</label>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="1000" checked> 1000
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="1300"> 1300
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="1500"> 1500
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="1800"> 1800
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="2000"> 2000
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="2500"> 2500
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="car_cc" value="Others"> Others
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="gear" class="col-sm-2 control-label">Gear Type</label>
                        <div class="col-sm-1">
                            <input type="radio" name="gear" value="Auto" checked> Auto
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="gear" value="Manual"> Manual
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="all_option" class="col-sm-2 control-label">All Option</label>
                        <div class="col-sm-1">
                            <input type="radio" name="all_option" value="Auto" checked> Auto
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="all_option" value="Manual"> Manual
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="music" class="col-sm-2 control-label">Music Media</label>
                        <div class="col-sm-1">
                            <input type="radio" name="music" value="CD" checked> CD
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="music" value="DVD"> DVD
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="serial_number" class="col-sm-2 control-label">Car Serial Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="serial_number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="engine" class="col-sm-2 control-label">Engine Type</label>
                        <div class="col-sm-1">
                            <input type="radio" name="engine" value="EFI" checked> EFI
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="engine" value="VVTI"> VVTI
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="engine" value="Others"> Others
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mileage" class="col-sm-2 control-label">Car Mileage</label>
                        <div class="col-sm-8">
                            <input type="text" name="mileage" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="doors" class="col-sm-2 control-label">Doors Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="doors" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="condtion" class="col-sm-2 control-label">Car Conditon</label>
                        <div class="col-sm-2">
                            <input type="radio" name="condtion" value="Brand New" checked> Brand New
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="condtion" value="Second Hand"> Second Hand
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="condtion" value="Others"> Others
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="passenger" class="col-sm-2 control-label">Passenger Capacity</label>
                        <div class="col-sm-8">
                            <input type="text" name="passenger" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="color" class="col-sm-2 control-label">Car Color</label>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="White" checked> White
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" name="color" value="Parl White"> Parl White
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="Black"> Black
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="Red"> Red
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="Banson"> Banson
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="Blue"> Blue
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="Grey"> Grey
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" name="color" value="Others"> Others
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="others[]" class="col-sm-2 control-label">Car Others Have</label>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Air Conditioning" checked>  Air Conditioning
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Alarm System"> Alarm System
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Audio Interface"> Audio Interface
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Automatic Headlights"> Automatic Headlights
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Auto Start/Stop"> Auto Start/Stop
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Bluetooth"> Bluetooth
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="CD/DVD Autochanger"> CD/DVD Autochanger
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Floor Mats"> Floor Mats
                        </div>
                        <label for="others[]" class="col-sm-2 control-label"></label>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Manual Transmission"> Manual Transmission
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Reversing Camera"> Reversing Camera
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Seat Heating"> Seat Heating
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Seat Ventilationn"> Seat Ventilation
                        </div>
                        <label for="others[]" class="col-sm-2 control-label"></label>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Steering Wheel Heating"> Steering Wheel Heating
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="others[]" value="Voice Control System"> Voice Control System
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="car_image" class="col-sm-2 control-label">Car Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="car_image" accept="image/*" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publication_status" class="col-sm-2 control-label">Publication Status</label>
                        <div class="col-sm-8">
                            <select name="publication_status" class="form-control">
                                <option>---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="btn" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Save Car Info</button>
                        </div>
                    </div>
                </form>

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