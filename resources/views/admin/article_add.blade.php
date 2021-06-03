@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<form method="POST"  action="{{ route('article.submit') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Artikel Baru</div>
                <div class="card-body">
					<div class="form-group">
						<label>Article Title</label>
						<input type="text" class="form-control" placeholder="Enter title" name="title">
					</div>
					<div class="form-group">
						<label>Content</label>
						<textarea class="ckeditor form-control" name="article"></textarea>
					</div>
                </div>
            </div>
		</div>
		<div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header">Featured Images</div>
                <div class="card-body">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
						Browse... <input type="file" id="imgInp" name="featured">
							</span>
						</span><input type="text" class="form-control" readonly>
					</div>
					<img class="mt-3" id='img-upload'/>
                </div>
			</div>

			<div class="card">
                <div class="card-header">Category</div>
                <div class="card-body">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter title" name="category">
					</div>
                </div>
            </div>
		</div>
		<div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
					<div class="d-flex flex-row-reverse">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Close</button>
					</div>
                </div>
            </div>
		</div>
	</div>
	</form>
</div>
@endsection
