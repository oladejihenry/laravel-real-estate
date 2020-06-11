@extends('adminlayout.master')


@section('title')
Edit Category Users | MonstaJamss
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Edit Categories.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="/role-property-type-update/{{ $type->id }}" Method="POST">
								{{ csrf_field() }}
								{{ method_field('PUT') }}

								<div class="form-group">
								    <label>Type</label>
								    <input type="text" name="name" value="{{ $type->name }}" class="form-control">
							  	</div>
							  	<button type="submit" class="btn btn-success">Update</button>
							  	<a href="/dashboard/property-type" class="btn btn-danger">Cancel</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection

@section('scripts')

@endsection