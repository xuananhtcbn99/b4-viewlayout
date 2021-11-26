{{--{{dd($products)}}--}}
{{--{{dd($users)}}--}}
@extends('backend.layouts.master')
@section('title','Admin')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Products</h1>
        <a href="{{route('products.create')}}"><button>Create</button></a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Category</th>
{{--                            <th>Description</th>--}}
{{--                            <th>Price</th>--}}
                            <th>Image</th>
                            <th colspan="3" >Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Category</th>
{{--                            <th>Description</th>--}}
{{--                            <th>Price</th>--}}
                            <th>Image</th>
                            <th colspan="3">Action</th>

                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $key=>$product)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$product['name']}}</td>
                                <td>{{$product['category']}}</td>
{{--                                <td>{{$product->description}}</td>--}}
{{--                                <td>{{$product->price}}</td>--}}
                                <td><img style="width: 100px;height: 100px" src="img/{{$product->image}}" alt=""></td>
                                <td><a href="{{route("products.detail",$product->id)}}">Detail</a></td>
                                <td><a href="{{route("products.update",$product->id)}}">Update</a></td>
                                <td><a href="{{route("products.delete",$product->id)}}">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
