<!DOCTYPE html>
<html lang="en">
<head>
<title>Login
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
<link href="<?php echo base_url();?>css/login.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<?php include "header.php" ?>
<body>
<div id="single">
<div data-target="about" class="about" id="about">

  <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="http://static6.businessinsider.com/image/5193e10f69bedd3633000000/heres-everything-youre-doing-wrong-in-your-indoor-cycling-class.jpg" style="background-repeat:no-repeat; background-size:cover;"> 


<div class="contact-w3layouts">
<div class="container">
<div class="col-md-12 contact-agileits-w3layouts-center">
      <div class="card card-container">
        <?php if($this->session->flashdata('errmsg')){
            echo $this->session->flashdata('errmsg');
        }

       ?>
<!--            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
<!--            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
<!--            <p id="profile-name" class="profile-name-card"></p>-->
          <?php echo validation_errors();?>
          <?php echo form_open('Admin_login/form');?>
                
                <input type="name" id="inputName" class="form-control" placeholder="Username" required autofocus name="name">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>


                
                




          <?php  echo form_close();?>
            
        </div>
        </div>
</div>
</div>

</div>
<?php include "footer.php" ?>
</div>
</td>
   </tr>
 </table>


</body>



</html>



