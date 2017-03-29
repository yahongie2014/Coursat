<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/style/css/library/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/style/css//library/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/style/css//library/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/style/css//md-font.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/style/css//style.css">
    <link rel="stylesheet" href="{{asset('')}}/js/form/css/sky-forms.css" type="text/css" media="all">

    <title>@yield('title')</title>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../../../connect.facebook.net/en_US/fbevents.js');

fbq('init', '1031554816897182');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1031554816897182&amp;ev=PageView&amp;noscript=1"
/></noscript>
</head>
<body id="page-top">

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    <header id="header" class="header">
        <div class="container">

            <!-- LOGO -->
            <div class="logo"><a href="{{URL('/')}}"><img src="{{asset('')}}/images/logo.png" alt=""></a></div>
            <!-- END / LOGO -->

            <!-- NAVIGATION -->
            <nav class="navigation">

                <div class="open-menu">
                    <span class="item item-1"></span>
                    <span class="item item-2"></span>
                    <span class="item item-3"></span>
                </div>

                <!-- MENU -->
                <ul class="menu">
                    <li><a href="{{URL('/')}}">Home</a></li>
                    <li><a href="{{URL('/about.html')}}">About Us</a></li>
                    <li><a href="{{URL('/course.html')}}">Courses</a></li>
                    <li><a href="{{URL('/team.html')}}">Our Team</a></li>
                    <li><a href="{{URL('/contact.html')}}">Contact Us</a></li>
                </ul>
                <!-- END / MENU -->

                <!-- SEARCH BOX -->
                <div class="search-box">
                    <i class="icon md-search"></i>
                    <div class="search-inner">
                        <form>
                            <input type="text" placeholder="key words">
                        </form>
                    </div>
                </div>
                <!-- END / SEARCH BOX -->

                <!-- LIST ACCOUNT INFO -->
                <ul class="list-account-info">
                    <!-- NOTIFICATION -->
                    <li class="list-item notification">
                        <div class="notification-info item-click">
                            <i class="icon md-bell"></i>
                            @if(Auth::user()->id == 2)
                            <span class="itemnew"></span>
                            @endif
                        </div>
                        <div class="toggle-notification toggle-list">
                            <div class="list-profile-title">
                                <h4>Notification</h4>
                                <span class="count-value">2</span>
                            </div>

                            <ul class="list-notification">

                                <!-- LIST ITEM -->
                                <li class="ac-new">
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span>Megacourse</span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p>attend Salary for newbie course</p>
                                            <div class="image">
                                                <img src="images/feature/img-1.jpg" alt="">
                                            </div>
                                            <div class="time">
                                                <span>5 minutes ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- END / LIST ITEM -->

                                <!-- LIST ITEM -->
                                <li class="ac-new">
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span>Megacourse</span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p>attend Salary for newbie course</p>
                                            <div class="image">
                                                <img src="images/feature/img-1.jpg" alt="">
                                            </div>
                                            <div class="time">
                                                <span>5 minutes ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- END / LIST ITEM -->

                                <!-- LIST ITEM -->
                                <li>
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span>Megacourse</span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p>attend Salary for newbie course</p>
                                            <div class="image">
                                                <img src="images/feature/img-1.jpg" alt="">
                                            </div>
                                            <div class="time">
                                                <span>5 minutes ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- END / LIST ITEM -->

                                <!-- LIST ITEM -->
                                <li>
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span>Megacourse</span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p>attend Salary for newbie course</p>
                                            <div class="image">
                                                <img src="images/feature/img-1.jpg" alt="">
                                            </div>
                                            <div class="time">
                                                <span>5 minutes ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- END / LIST ITEM -->

                                <!-- LIST ITEM -->
                                <li>
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span>Megacourse</span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p>attend Salary for newbie course</p>
                                            <div class="image">
                                                <img src="images/feature/img-1.jpg" alt="">
                                            </div>
                                            <div class="time">
                                                <span>5 minutes ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- END / LIST ITEM -->
                            </ul>
                        </div>
                    </li>
                    <!-- END / NOTIFICATION -->

                    <li class="list-item account">
                        <div class="account-info item-click">
                            <img src="{{ Auth::user()->pic }}" alt="{{ Auth::user()->name }}">
                        </div>
                        <div class="toggle-account toggle-list">
                            <ul class="list-account">
                                <li><a href="{{url('/profile.html', Auth::user()->id)}}"><i class="icon md-config"></i>Setting</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="icon md-arrow-right"></i>Sign Out</a></li>
                            </ul>
                        </div>
                    </li>


                </ul>
                <!-- END / LIST ACCOUNT INFO -->

            </nav>
            <!-- END / NAVIGATION -->

        </div>
    </header>
    <!-- END / HEADER -->
        <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="{{ Auth::user()->pic }}" alt="{{ Auth::user()->name }}">
                </div>    
                <div class="name-author">
                    <h2 class="big">{{ Auth::user()->name }}</h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>{{ Auth::user()->Address }}</h3>
                </div>
            </div>
            <div class="info-follow">
                <div class="trophies">
                    <span>User</span>
                    <p>Coursat</p>
                </div>
                <div class="trophies">
                    <span>{{ Auth::user()->id }}</span>
                    <p>Id Number</p>
                </div>
                <div class="trophies">
                <?php
                        if (Auth::user()->teacher == 0 && Auth::user()->admin == 0) {
                            echo "<span class='badge bg-red'>Student</span>";
                        } elseif (Auth::user()->teacher == 1 && Auth::user()->admin == 0) {
                            echo "<span class='badge bg-yellow'>Teacher</span>";
                        } else {
                            echo "<span class='badge bg-light-blue'>Admin</span>";
                        }
                        ?>
                <p>Role Member</p>
                </div>

        </div>
    </section>
    <!-- END / PROFILE FEATURE -->


    <!-- CONTEN BAR -->
    <section class="content-bar">
        <div class="container">
            <ul>
            @if(Auth::user()->teacher == 1)
                <li>
                    <a href="account-teaching.html">
                        <i class="icon md-people"></i>
                        Publich Aticle
                    </a>
                </li>
                <li>
                    <a href="{{URL('/profile/message.html')}}">
                        <i class="icon md-email"></i>
                        Sent Sms
                    </a>
                </li>

                @else
                <li>
                    <a href="account-assignment.html">
                        <i class="icon md-shopping"></i>
                        Assignment
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{url('/profile.html', Auth::user()->id)}}">
                        <i class="icon md-user-minus"></i>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- PROFILE -->

    @yield('content');
    <!-- FOOTER -->
    <footer id="footer" class="footer">
        <div class="second-footer">
            <div class="container">
                <div class="contact">
                    <div class="email">
                        <i class="icon md-email"></i>
                      <a href="mailto:info@Coursat.com">info@Coursat.com</a>
                    </div>
                    <div class="phone">
                        <i class="fa fa-mobile"></i>
                        <span>19568</span>
                    </div>
                    <div class="address">
                        <i class="fa fa-map-marker"></i>
                        <span>15 Maadi Teba Academy</span>
                    </div>
                </div>
                <p class="copyright">&copy; Copyright © <?php echo date('Y'); ?> Coursat Online. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- END / FOOTER -->
</div>
<script type="text/javascript" src="{{asset('')}}/style/js/library/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{asset('')}}/style/js/library/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('')}}/style/js/library/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="{{asset('')}}/style/js/library/jquery.appear.min.js"></script>
<script type="text/javascript" src="{{asset('')}}/style/js/library/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="{{asset('')}}/style/js/scripts.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-20585382-5', 'megadrupal.com');
    ga('send', 'pageview');
</script>
</body>
</html>