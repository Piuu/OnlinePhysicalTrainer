<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact
    </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gym Workout Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/cm-overlay.css" /><!-- //overlay-->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!--//fonts-->
</head>
<?php include "header2.php" ?>
<body>
<div id="single">
    <div data-target="about" class="about" id="about">
        <div class="contact-w3layouts">
            <div class="container">
                <div class="col-md-6 contact-agileits-w3layouts-left">
                    <h3 class="title-w3-agile-sub">Contact <span>Us</span></h3>



                    <p class="sub">Colombo 07, Sri Lanka<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></span></p>
                    <p class="sub">Mon-Fri : 9am - 6pm.  Sat : 9am - 12pm<span class="glyphicon glyphicon-time icon" aria-hidden="true"></span></p>

                    <p class="add"><span>Tel :</span> (+94) 0112581835<span class="glyphicon glyphicon glyphicon-earphone icon" aria-hidden="true"></span></p>
                    <p class="add"><span>Email :</span> <a class="mail" href="mailto:mail@example.com">info(at)www.cmb.ac.lk</a><span class="glyphicon glyphicon-envelope icon" aria-hidden="true"></span></p>

                </div>
                <div class="col-md-6 mail-grid1-form ">
                    <h3 class="title-w3-agile-sub">Send a <span>Message</span></h3>
                    <?php echo validation_errors();?>
                    <?php echo form_open('contact_user/form');?>

                    <input type="text" name="Name" placeholder="StudentID" required="" />
                    <input type="email" name="Email" placeholder="Email" required="" />
                    <textarea name="Message" placeholder="Type Your Text Here...." required=""></textarea>
                    <input type="submit" value="Submit" />


                    <?php  echo form_close();?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <?php include "footer.php" ?>
</div>


</body>


</html>
