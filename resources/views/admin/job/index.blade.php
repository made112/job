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
                            <li class="breadcrumb-item active">Jobs</li>
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
                        <th>Title</th>
                        <th>Description</th>
                        <th>Jop Type</th>
                        <th>Salary</th>
{{--                        <th>Date Posted</th>--}}
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)

                        <tr>
                            <td>{{$job->name}}</td>
                            <td>{{$job->job_description}}</td>
                            <td>{{$job->job_type}}</td>
                            <td>{{$job->salary}}</td>
{{--                            <td>{{$company->date_posted}}</td>--}}
                            <td>
                                <a href="{{route('admin.job.delete',$job->id)}}"> <button class = "btn-danger" id="myBtn">delete</button></a>
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
