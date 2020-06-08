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
				<p style="padding-left:9px;"> Post Link: <a href="{{route('posts.show',$property->slug)}}" target="_blank">{{ $property->subject }}</a> </p>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form action="/role-admin-update/{{ $property->id }}" Method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								{{ method_field('PUT') }}

								<div class="form-group">
								    <label>Name</label>
								    <input type="text" name="subject" value="{{ $property->subject }}" class="form-control">
							  	</div>
							  	<div class="form-group">
								    <label>Body</label>
								    <textarea type="text" name="body" value="" class="editor">{{ $property->body }}</textarea>
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
					<div class="form-group">
					<label>Audio Media Code:</label>
					<textarea type="text" name="media" id="" cols="30" rows="10" style="width: 100%;">{{ $property->media }}</textarea>
					</div>
					<div class="form-group">
					<label>Video Media Code:</label>
					<textarea type="text" name="video" id="" cols="30" rows="10" style="width: 100%;">{{ $property->video }}</textarea>
					</div>
				<div class="form-group">
	            <label for="recipient-name" class="col-form-label">Exceprt:</label>
	            <input type="text" name="excerpt" class="form-control" value="{{$property->excerpt}}" id="recipient-name">
	          </div>
			  <div class="form-group">
	            <label for="recipient-name" class="col-form-label">SEO Title:</label>
	            <input type="text" name="seo_title" class="form-control" value="{{$property->seo_title}}" id="recipient-name">
	          </div>
			  <div class="form-group">
	            <label for="recipient-name" class="col-form-label">SEO Description:</label>
	            <textarea type="text" name="seo_desc" id="" cols="30" rows="10" style="width: 100%;">{{$property->seo_desc}}</textarea>
	          </div>
			  <div class="form-group">
	            <label for="recipient-name" class="col-form-label">SEO Keywords:</label>
	            <input type="text" name="seo_keywords" class="form-control" value="{{$property->seo_keywords}}" id="recipient-name">
	          </div>
			  <div>
			  <label><b>Select Featured Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
				  <br>
				  <div style="display:flex;">
				  	<input type="file" class="form-control" name="featured_image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->featured_image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
			  </div>
			  <br>
			  <br>
	          <div>
				  <label><b>Select Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
				  <br>
				  <div style="display:flex;">
				  	<input type="file" class="form-control" name="image"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
				  
				  <br>
				  <div style="display:flex;">
				  <input type="file"  class="form-control" name="image_2"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->image_2 ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
				  <br>
				  <div style="display:flex;">
				  <input type="file"  class="form-control" name="image_3"> <img src="{{ asset('https://monstajams-laravel.s3.eu-west-2.amazonaws.com/' . $property->image_3 ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
			</div>
							  	<button type="submit" class="btn btn-success">Update</button>
							  	<a href="/admin-posts" class="btn btn-danger">Cancel</a>
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