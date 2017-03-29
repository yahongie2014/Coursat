@extends('layouts.profile')
@section('title')
Successfuly Sent
@endsection
@section('content')
    <section class="profile">
        <div class="container">
            
            <h3 class="md black">Successfuly</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount">
                                <img src="{{ Auth::user()->pic }}" alt="{{ Auth::user()->name }}">
                            </div>
                        </div>   
                        <div class="info-acount">
                            <h3 class="md black">Massage Sent by :{{ Auth::user()->name }}</h3>
                            <p>Thank you For using Our Service 😍😍</p>
                            </div>
                        </div>
                    </div>    
                </div>
           </div>
    </section>
@endsection