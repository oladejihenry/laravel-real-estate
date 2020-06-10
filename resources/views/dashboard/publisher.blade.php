@extends('adminlayout.master')


@section('title')
	Dashboard | Naijaswift
@endsection



@section('content')

<?php
	$sum = DB::table('properties')->count();
  $total = DB::table('users')->count();
  $location = DB::table('locations')->count();
  $category = DB::table('categories')->count();
  $trash = DB::table('properties')->whereNotNull('deleted_at')->count();
?>
<div class="row">
  	<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Registered Users</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$total}}</p>
      </div>
    </div>
  </div> 


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Properties</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$allp}}</p>
      </div>
    </div>
  </div>  

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Location</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$location}}</p>
      </div>
    </div>
  </div> 

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Properties Category</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$category}}</p>
      </div>
    </div>
  </div> 

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Trashed Properties</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$trash}}</p>
      </div>
    </div>
  </div>     
</div>



@endsection


@section('scripts')

@endsection