{{--{{dd($users)}}--}}
@extends('backend.layouts.master')
@section('title','Post list')
@section('content')
    <div class="container-fluid">

{{--        <!-- Page Heading -->--}}
{{--        <h1 class="h3 mb-2 text-gray-800">Tables</h1>--}}
{{--        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.--}}
{{--            For more information about DataTables, please visit the <a target="_blank"--}}
{{--                                                                       href="https://datatables.net">official DataTables documentation</a>.</p>--}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->user->name}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
