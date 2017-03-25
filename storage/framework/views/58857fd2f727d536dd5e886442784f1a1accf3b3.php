<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $__env->yieldContent('title'); ?></title>
<style>
.round {
  -webkit-border-top-left-radius: 1px;
  -webkit-border-top-right-radius: 2px;
  -webkit-border-bottom-right-radius: 3px;
  -webkit-border-bottom-left-radius: 4px;

  -moz-border-radius-topleft: 1px;
  -moz-border-radius-topright: 2px;
  -moz-border-radius-bottomright: 3px;
  -moz-border-radius-bottomleft: 4px;

  border-top-left-radius: 1px;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 4px;
}
</style>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Template Styles -->
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/css/et-line-font/et-line-font.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/css/magnific-popup.css">
<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo e(asset('')); ?>/css/responsive-leyouts.css" type="text/css" />
<!-- Mega Menu -->
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/js/megamenu/stylesheets/screen.css">
<!-- Animations -->
<link href="<?php echo e(asset('')); ?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo e(asset('')); ?>/js/form/css/sky-forms.css" type="text/css" media="all">
</head>
<body>
<div class="site-wrapper" style="position: relative;">
  <div class="temp-header">
    <div class="container">
      <div class="row">
        <div class="top-links">
          <div class="col-md-6 pull-left nodisplay">Call: 19264</div>
          <div class="col-md-6 pull-right text-right">
            <ul class="top-right-list">
              <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(URL('/login')); ?>"><i class="fa fa-lock"></i> Login</a></li>
              <li><a href="<?php echo e(URL('/register')); ?>"><i class="fa fa-user"></i> Register</a> | </li>
              <li><a href="<?php echo e(url('auth/facebook')); ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo e(url('auth/twitter')); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo e(url('auth/google')); ?>"><i class="fa fa-google-plus"></i></a></li>
              <li class="last"><a href="<?php echo e(url('auth/github')); ?>"><i class="fa fa-github"></i></a></li>
              <li class="last"><a href="<?php echo e(url('auth/github')); ?>"><i class="fa fa-Windows"></i></a></li>

               <?php else: ?>
               <li class="dropdown">
               <a href="<?php echo e(url('/profile.html', Auth::user()->id)); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
             <div class="round"><img style="border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;" src="<?php echo e(Auth::user()->pic); ?>"/></div> Welcome <?php echo e(Auth::user()->name); ?> ! <span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
               <li><a href="<?php echo e(url('/profile.html', Auth::user()->id)); ?>"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
              <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="header-section transparent style1 pin-style">
      <div class="container">
        <div class="mod-menu">
          <div class="row">
            <div class="col-sm-2"> <a href="<?php echo e(URL('/')); ?>" title="" class="logo"> <img src="<?php echo e(asset('')); ?>/images/logo.png" alt=""> </a> </div>
            <div class="col-sm-10">
              <div class="main-nav">
                <ul class="nav navbar-nav top-nav">
                  <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                    <div class="search-box">
                      <div class="content">
                        <div class="form-control">
                          <input type="text" placeholder="Type to search" />
                          <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                        <a href="#" class="close-btn">x</a> </div>
                    </div>
                  </li>
                  <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                </ul>
                <div id="menu" class="collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                    <li><a href="<?php echo e(URL('/about.html')); ?>">About Us</a></li>
                    <li><a href="<?php echo e(URL('/course.html')); ?>">Courses</a></li>
                    <li><a href="<?php echo e(URL('/team.html')); ?>">Our Team</a></li>
                    <li><a href="<?php echo e(URL('/contact.html')); ?>">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
    </div>
    <!--end menu--> 
  </div>
  <?php echo $__env->yieldContent('content'); ?>
  <div class="clearfix"></div>
  <footer id="footer">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Coursat</h4>
          <ul class="footer-links">
          <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
          <li><a href="<?php echo e(URL('/about.html')); ?>">About Us</a></li>
          <li><a href="<?php echo e(URL('/course.html')); ?>">Courses</a></li>
          <li><a href="<?php echo e(URL('/team.html')); ?>">Our Team</a></li>
          <li><a href="<?php echo e(URL('/contact.html')); ?>">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Useful Links</h4>
          <ul class="footer-links">
            <li><a href="#">Held Desk</a></li>
            <li><a href="#">Facilities</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Student Support</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Our Course</h4>
          <ul class="footer-links">
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Visual Assistant</a></li>
            <li><a href="#">System Analysis</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Instractours</h4>
          <ul class="footer-links">
            <li><a href="#">Teams</a></li>
            <li><a href="#">Find Designers</a></li>
            <li><a href="#">Find Developers</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4 footer-widget">
          <h4>Contact Info</h4>
          <p>15 Maadi Teba Academy</p>
          <p>19568</p>
          <p>E-mail: <a href="mailto:info@Coursat.com">info@Coursat.com</a></p>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p> <small class="block">&copy; Copyright © <?php echo date('Y'); ?> Coursat Online. All rights reserved.</p>
          <p>
          <ul class="social-icons">
            <li><a href="https://twitter.com/twitter"><i class="icon-twitter"></i></a></li>
            <li><a href="http://facebook.com/facebook"><i class="icon-facebook"></i></a></li>
            <li><a href="https://twitter.com/twitter"><i class="icon-linkedin"></i></a></li>
            <li><a href="https://plus.google.com/+GoogleStudents"><i class="icon-googleplus"></i></a></li>
          </ul>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->
  <div class="clearfix"></div>
</div>
<!-- end site wrapper--> 
<a href="#" class="scrollup"></a> 
<script src="<?php echo e(asset('')); ?>/js/jquery.js"></script> 
<script src="<?php echo e(asset('')); ?>/js/bootstrap.min.js"></script> 
<!-- Mega Menu --> 
<script src="<?php echo e(asset('')); ?>/js/megamenu/js/main.js"></script> 
<script src="<?php echo e(asset('')); ?>/js/megamenu/js/onepage.js"></script> 
<!-- Magnific Popup --> 
<script src="<?php echo e(asset('')); ?>/js/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo e(asset('')); ?>/js/magnific-popup-options.js"></script> 
<!-- Counters --> 
<script src="<?php echo e(asset('')); ?>/js/aninum/jquery.animateNumber.min.js"></script> 
<!-- Animations --> 
<script src="<?php echo e(asset('')); ?>/js/animations/animations.min.js" type="text/javascript"></script> 
<script src="<?php echo e(asset('')); ?>/js/animations/appear.min.js" type="text/javascript"></script> 
<!-- Scroll Up --> 
<script src="<?php echo e(asset('')); ?>/js/scrolltotop/totop.js" type="text/javascript"></script>
<script src="<?php echo e(asset('')); ?>/js/form/jquery.form.min.js"></script> 
</body>
</html>