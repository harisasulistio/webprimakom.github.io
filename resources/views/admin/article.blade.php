@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Article List</div>

                <div class="card-body">
					<div class="d-flex justify-content-end mb-4">
						<a type="button" href="{{URL::to('/admin/articles/add')}}" class="btn btn-success">Add Articles</a>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Title</th>
								<th scope="col">Created At</th>
								<th scope="col">Category</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
					<tbody>
						@foreach($getArticle as $key => $data)
						<tr>
							{{--<th>{{ $data->name }}</th>
							<td>{{ $data->email }}</td>
							<td>{{ $data->website }}</td>
							<td><img src="{{ url('storage/companies/'.$data->logo) }}" class="img-fluid img-thumbnail" alt="" style="max-width:100px;"></td>
							<td>
								<button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#modalDetail{{ $data->id }}">Details</button>
								<button type="button" class="btn btn-warning my-1" data-toggle="modal" data-target="#modalUpdate{{ $data->id }}">Edit</button>
								<form action="deleteCompany/{{ $data->id }}" method="post" class="form-validation">
									{{ csrf_field() }}
             						{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger my-1">Delete</button>
								</form>
							</td>--}}
							<td>{{ $data->title }}</td>
							<td>{{ $data->created_at }}</td>
							<td>{{ $data->category_id }}</td>
							<td>
								<button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#modalDetail{{ $data->id }}">Details</button>
								<form action="/admin/articles/delete/{{ $data->id }}" method="post" class="form-validation">
									{{ csrf_field() }}
             						{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger my-1">Delete</button>
								</form>
							</td>
						</tr>
						<div class="modal fade" id="modalDetail{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDetail">
							<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">{{ $data->title }}</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p> Created At : {{ $data->created_at }} </p>
										<p class="mt-5"> {!! $data->article !!}
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
