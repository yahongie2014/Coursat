@extends('layouts.web')
@section('title')
Admin
@endsection
@section('content')
  <div class="clearfix"></div>
  <div class="page-header">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Welcome</h3>
        <h4>Admin</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="{{URL('/')}}">Home</a> <i>/</i>Admin</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
@endsection