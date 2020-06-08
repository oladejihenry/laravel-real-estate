@extends('adminlayout.master')


@section('title')
Edit Post Page | MonstaJamss
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Edit Posts.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					
				</div>
				<p style="padding-left:9px;"> Post Link: <a href="{{route('posts.show',$property->slug)}}" target="_blank">{{ $property->title }}</a> </p>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form action="/role-admin-updateproperty/{{ $property->id }}" Method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								{{ method_field('PUT') }}

								<div class="form-group">
								    <label>Name</label>
								    <input type="text" name="title" value="{{ $property->title }}" class="form-control">
							  	</div>
							  	<div class="form-group">
								    <label>Description</label>
								    <textarea type="text" name="description" value="" class="editor">{{ $property->description }}</textarea>
								   <script>
									ClassicEditor
										.create( document.querySelector( '.editor' ) ,{
											mediaEmbed: {
								            // configuration...
								        },
											cloudServices: {
								            
								        },
								        // plugins: [ Image, ImageResize ],
								        image: {
								        	resizeUnit: '400px',
								        toolbar: [
								            'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'
								        ],
								        styles: [
								                // This option is equal to a situation where no style is applied.
								                'full',
								                // This represents an image aligned to the left.
								                'alignLeft',
								                // This represents an image aligned to the right.
								                'alignRight'
								            ]
								    },
										})
										.then( editor => {
											window.editor = editor;
										} )
										.catch( err => {
											console.error( err.stack );
										} );
								</script>
							  	</div>
					
			  <br>
			  <div>
			  <label><b>Select Featured Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
				  <br>
				  <div style="display:flex;">
				  	<input type="file" class="form-control" name="featured_image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->featured_image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
			  </div>
			  <br>
			  <div>
				  <label><b>Price:</b></label>
                  <br>
				  <input type="text" name="price" value="{{$property->price}}">
				</div>
			  <br>
			  <br>
	          <div>
				  <label><b>Select Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
				  <br>
				  <div style="display:flex;">
				  	<input type="file" class="form-control" name="first_image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->first_image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
				  
				  <br>
				  <div style="display:flex;">
				  <input type="file"  class="form-control" name="second_image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->second_image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
				  <br>
				  <div style="display:flex;">
				  <input type="file"  class="form-control" name="third_image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->third_image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
				  <br>
				   <div style="display:flex;">
				  <input type="file"  class="form-control" name="fourth_image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->fourth_image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
			</div>
							  	<button type="submit" class="btn btn-success">Update</button>
							  	<a href="/all-properties" class="btn btn-danger">Cancel</a>
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