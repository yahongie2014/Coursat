@extends('layouts.web')
@section('title')
Sms 
@endsection
@section('content')
  <div class="clearfix"></div>
  <div class="page-header">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Succcessfuly</h3>
        <h4>Sent SMS</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="{{URL('/')}}">Home</a> <i>/</i>Sms</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
@endsection