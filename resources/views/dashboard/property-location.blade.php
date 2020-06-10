@extends('adminlayout.master')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Property Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-location" method="POST">
      		{{ csrf_field() }}
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">City:</label>
	            <input type="text" name="city" class="form-control" id="recipient-name">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">State:</label>
	            <input type="text" name="state" class="form-control" id="recipient-name">
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
      </form>
    </div>
  </div>
</div>




<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title"> All Property Location
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>	
		    </h4>
		  </div>
		  	<div class="card-body">
			    <div class="table-responsive">
			      <table class="table">
			        <thead class=" text-primary">
			          <th>ID</th>
			          <th>City</th>
			          <th>State</th>
			          <th>Edit</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@foreach ($location as $row)
			          <tr>
			            <td>{{ $row->id }}</td>
			            <td>{{ $row->city }}</td>
			            <td>{{ $row->state }}</td>
			            <td>
			            	<a href="/role-locationedit/{{ $row->id }}" class="btn btn-success">Edit</a>
			            </td>
			            <td>
			            	<form action="/location-delete/{{ $row->id }}" method="post">
			        			{{ csrf_field() }}
			        			{{ method_field('DELETE') }}
			            		<button type="submit" class="btn btn-danger">Delete</button>
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
				{{ $location->onEachSide(1)->links() }} 
			</ul>
		</nav>
  	</div>         
</div>

@endsection