@extends('layouts.admin_layout')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Jobs Request</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Jobs</h3>
{{--                <a href="{{url('/admin/add-edit-section')}}" style="max-width: 150px; float:right;display: inline-block;" class="btn btn-block btn-success" >Add Category</a>--}}
            </div>

        <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>

                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)

                        <tr>
                            <td>{{$job->name}}</td>
                            <td>{{$job->phone}}</td>
                            <td><a href="{{route('job.download',['path' => $job->cv])}}" class="btn btn-primary btn-sm mt-1 mb-1" id="download"><i class="fe fe-camera mr-1"></i>Download</a>
                                <a href="{{route('admin.job_request.delete',$job->id)}}"> <button class = "btn-danger" id="myBtn">delete</button></a>

                            </td>



                            <!-- Modal -->

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->


@endsection
