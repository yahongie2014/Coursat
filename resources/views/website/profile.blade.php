@extends('layouts.profile')
@section('title')
{{ Auth::user()->name }}
@endsection
@section('content')    
    <section class="profile">
        <div class="container">
            
            <h3 class="md black">Profile</h3>
            <div class="row">
                <div class="col-md-9">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount">
                                <img src="{{ Auth::user()->pic }}" alt="{{ Auth::user()->name }}">
                            </div>
                        </div>   
                        <div class="info-acount">
                            <h3 class="md black">{{ Auth::user()->name }}</h3>
                            <p>{{ Auth::user()->des }}</p>
                            <div class="profile-email-address">
                                <div class="profile-email">
                                    <h5>Email</h5>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                                <div class="profile-address">
                                    <h5>Password</h5>
                                    <p>************</p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-3">
                    <div class="social-connect">
                    <p>Start Your First Course Now</p>
                    <button type="button" class="btn btn-info">Request Course Now</button>
                    </div>
                </div>
            </div>    
            </div>    
        </div>
    </section>
@endsection