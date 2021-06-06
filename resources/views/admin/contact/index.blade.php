@extends('layouts.admin')

@section('title')
    <title>Contact Us</title>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Contact Us</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="mt-0 header-title">Example</h4> --}}
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus-circle mr-1" aria-hidden="true"></i> Add Data
                        </button>

                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="200px">Jam Kerja</th>
                                            <th width="150px">Phone</th>
                                            <th width="100px">Email Address</th>
                                            <th width="250px">Localation</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>

                                                <td>{{ $contact->id }}</td>
                                                <td>{{ $contact->time }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->location }}</td>
                                                <td>
                                                    <form action="{{ route('contact.destroy', $contact->id) }}"
                                                        method="post">
                                                        <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                                            Edit</a>
                                                        <a href="" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash"></i>
                                                            Delete</a>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    {{-- Modals add --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalLabel">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Time Work</label>
                            <input type="text" class="form-control @error('time') is-invalid @enderror" name="time">
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <textarea name="location" class="form-control @error('location')  is-invalid @enderror"
                                cols="30" rows="5"></textarea>
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
