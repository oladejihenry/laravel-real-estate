  
@extends('adminlayout.master')


@section('title')
	All Posts | MonstaJamss
@endsection



@section('content')

<?php 
$id = '1';
$sum = DB::table('properties')->count();
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Property</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
  </div>
</div>



<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title"> All Properties ( {{$allp}} )
				<a href="{{route('posts.create')}}" class="btn btn-success float-right">Add Post</a>
		    </h4>
		  </div>
		  	<div class="card-body">
			    <div class="table-responsive">
			      <table class="table">
			        <thead class=" text-primary">
			          <th>Title</th>
					  <th>Property Type</th>
					  <th>Date</th>
			          <th>Username</th>
			          <th>Property Location</th>
			          <th>Price</th>
			          <th>Edit</th>
			          <th>Bin</th>
			        </thead>
			        <tbody>
			        	@foreach ($property as $properties)
			          <tr>
			            <td><a href="{{ route('posts.show',$properties->slug) }}" target="_blank">{{ $properties->title }}</a></td>
						<td>{{ $properties->apartmenttype()->first()->name }}</td>
						<td>Published<br>{{ $properties->created_at->format('m/d/Y') }}</td>
			            <td>{{$properties->user->username}}</td>
			            <td>{{ $properties->location()->first()->city }}</td>
			            <td>{{number_format($properties->price, 2, '.', ',')}}</td>

			            <td>
			            	@if(Auth()->check())
                			@if(auth()->user()->id == $properties->user_id)
			            	<a href="/admin-editproperty/{{ $properties->id }}" class="btn btn-success">Edit</a>
			            	@endif
			            	@endif
			            </td>
			            <td>
			            	<form action="/adminproperty-delete/{{ $properties->id }}" method="post">
			        			{{ csrf_field() }}
			        			{{ method_field('DELETE') }}
			            		<button type="submit" class="btn btn-danger">Bin</button>
			            	</form>
			            </td>
			          </tr>
			          @endforeach
			        </tbody>
			      </table>
			    </div>
			</div>
		</div>
		<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
				{{ $property->onEachSide(1)->links() }} 
			</ul>
		</nav>
  	</div>         
</div>


  
@endsection


@section('scripts')

@endsection