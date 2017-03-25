@extends('layouts.web')
@section('title')
Our Courses 
@endsection
@section('content')
  <div class="clearfix"></div>
  <div class="page-header one">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Courses List View</h3>
        <h4>Our Awesome Courses List</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="{{URL('/')}}">Home</a> <i>/</i> Courses List View</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
  <div class="clearfix"></div>
  <div class="section-lg counters">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6 m-bottom3">
          <div class="text-center animate-in" data-anim-type="fade-in-down" data-anim-delay="100"> <i class="count-icon icon-profile-male"></i> <span class="count-nos" id="target">25890</span>
            <p class="count-lable">Students</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 m-bottom3">
          <div class="text-center animate-in" data-anim-type="fade-in-down" data-anim-delay="200"> <i class="count-icon icon-strategy"></i> <span class="count-nos" id="target2">1560</span>
            <p class="count-lable">Instructor</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 m-bottom3">
          <div class="text-center animate-in" data-anim-type="fade-in-down" data-anim-delay="300"> <i class="count-icon icon-puzzle"></i> <span class="count-nos" id="target3">21350</span>
            <p class="count-lable">Courses</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 m-bottom3">
          <div class="text-center animate-in" data-anim-type="fade-in-down" data-anim-delay="400"> <i class="count-icon icon-trophy"></i> <span class="count-nos" id="target4">128560</span>
            <p class="count-lable">Earnings</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end counters-->
  <div class="clearfix"></div>
  <div class="section-lg m-bottom10">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="cource-box">
            <div class="row cource-text">
              <div class="col-lg-4 col-md-4"> <a href="#"><img class="img-responsive" src="images/course-1.jpg" alt=""></a> </div>
              <div class="col-lg-8 col-md-8">
                <div>
                  <h4><a href="{{URL('/single.html')}}">Photoshop - Web Deisgn</a> <span>$195</span></h4>
                  <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                  <a href="{{URL('/single.html')}}" class="btn btn-small">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="cource-box">
            <div class="row cource-text">
              <div class="col-lg-4 col-md-4"> <a href="#"><img class="img-responsive" src="images/course-2.jpg" alt=""></a> </div>
              <div class="col-lg-8 col-md-8">
                <div>
                  <h4><a href="{{URL('/single.html')}}">Sketch - Mobile App</a> <span>$195</span></h4>
                  <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                  <a href="{{URL('/single.html')}}" class="btn btn-small">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="cource-box">
            <div class="row cource-text">
              <div class="col-lg-4 col-md-4"> <a href="#"><img class="img-responsive" src="images/course-3.jpg" alt=""></a> </div>
              <div class="col-lg-8 col-md-8">
                <div>
                  <h4><a href="{{URL('/single.html')}}">Software Training</a> <span>$195</span></h4>
                  <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                  <a href="{{URL('/single.html')}}" class="btn btn-small">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="cource-box">
            <div class="row cource-text">
              <div class="col-lg-4 col-md-4"> <a href="#"><img class="img-responsive" src="images/course-4.jpg" alt=""></a> </div>
              <div class="col-lg-8 col-md-8">
                <div>
                  <h4><a href="{{URL('/single.html')}}">Developing Mobile Apps</a> <span>$195</span></h4>
                  <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                  <a href="{{URL('/single.html')}}" class="btn btn-small">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="cource-box">
            <div class="row cource-text">
              <div class="col-lg-4 col-md-4"> <a href="#"><img class="img-responsive" src="images/course-5.jpg" alt=""></a> </div>
              <div class="col-lg-8 col-md-8">
                <div>
                  <h4><a href="{{URL('/single.html')}}">Starting a Startup</a> <span>$195</span></h4>
                  <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                  <a href="{{URL('/single.html')}}" class="btn btn-small">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="cource-box">
            <div class="row cource-text">
              <div class="col-lg-4 col-md-4"> <a href="#"><img class="img-responsive" src="images/course-6.jpg" alt=""></a> </div>
              <div class="col-lg-8 col-md-8">
                <div>
                  <h4><a href="{{URL('/single.html')}}">Basic of Nature Photography</a> <span>$195</span></h4>
                  <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                  <a href="{{URL('/single.html')}}" class="btn btn-small">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end features-->
  <div class="clearfix"></div>
  <div class="section-lg">
    <div class="container">
      <div class="row"> <img class="img-responsive m-auto" src="images/studet-group.jpg" alt=""> </div>
    </div>
  </div>
  <!--end image-->
  <div class="clearfix"></div>
  <div class="bg-parallax">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="m-bottom3 font-white">Lets Get Started</h2>
          <p  class="m-bottom6 font-white">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row animate-in" data-anim-type="fade-in-up" data-anim-delay="100">
        <div class="col-md-8 col-md-offset-2 text-center">
          <p><a href="{{URL('/single.html')}}" class="btn btn-primary btn-lg">Create A Free Course</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection