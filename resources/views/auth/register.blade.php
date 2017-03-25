@extends('layouts.web')
@section('title')
Register Now
@endsection
@section('content')
  <div class="clearfix"></div>
  <div class="page-header four">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Registration</h3>
        <h4>User Register Here...!</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="{{URL('/')}}">Home</a> <i>/</i> Registration</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
  <div class="clearfix"></div>
  <div class="section-lg counters m-bottom4">
    <div class="container">
      <div class="row">
        <div class="reg_form">
          <form class="sky-form" id="sky-form" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <header>Don't have an Account? Register Now!</header>
            <fieldset>
              <div class="section{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="text" placeholder="Username" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                     @endif
                  <b class="tooltip tooltip-bottom-right">Needed to enter the website</b> </label>
              </div>
              <div class="section{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                  <input type="email" placeholder="Email address" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                   <span class="help-block">
                   <strong>{{ $errors->first('email') }}</strong>
                   </span>
                   @endif
                  <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
              </div>
              <div class="section{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                  <input type="password" id="password" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                   <span class="help-block">
                   <strong>{{ $errors->first('password') }}</strong>
                   </span>
                   @endif
                  <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
              </div>
              <div class="section{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                  <input type="password" placeholder="Confirm password" name="password_confirmation">
                  @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                  @endif
                  <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
              </div>
              <div class="section{{ $errors->has('pic') ? ' has-error' : '' }}">
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                 {!! Form::file('pic', null) !!}
                  @if ($errors->has('pic'))
                  <span class="help-block">
                  <strong>{{ $errors->first('pic') }}</strong>
                  </span>
                  @endif
              </div>

            </fieldset>
            <fieldset>
              <div class="row">
                <div class="section col col-6">
                  <label class="input">
                    <input type="text" placeholder="First name" name="firstname">
                  </label>
                </div>
                <div class="section col col-">
                  <label class="input">
                    <input type="text" placeholder="Last name" name="lastname">
                  </label>
                </div>
              </div>
            </fieldset>
            <footer>
              <button class="btn button" type="submit">Submit</button>
            </footer>
          </form>
        </div>
        <form class="sky-form sky-form-modal" id="sky-form2" action="{{ url('/password/reset') }}">
         {{ csrf_field() }}
          <header>Password recovery</header>
          <fieldset>
            <div class="section">
              <label class="label">E-mail</label>
              <label class="input"> <i class="icon-append icon-user"></i>
                <input type="email" id="email" name="email">
              </label>
            </div>
          </fieldset>
          <footer>
            <button class="button eight" name="submit" type="submit">Submit</button>
            <a class="button button-secondary modal-closer" href="#">Close</a> </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your request successfully sent!<br>
              <a class="modal-closer" href="#">Close window</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--end counters-->
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
          <p><a href="#" class="btn btn-primary btn-lg">Create A Free Course</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection
