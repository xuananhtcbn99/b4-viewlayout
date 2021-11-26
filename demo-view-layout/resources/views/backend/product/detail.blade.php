
@extends('backend.layouts.master')
@section('title','Admin')
@section('content')
<table border="1px">
    <thead>
    <tr>
{{--        <th>No.</th>--}}
        <th>Name</th>
        <th>Category</th>

    </tr>
    </thead>
    <tbody>
{{--    @foreach($products as $key=>$product)--}}
        <tr>
{{--            <td>{{$product->$key+1}}</td>--}}
            <td>{{$product['name']}}</td>
            <td>{{$product['category']}}</td>
            <a href="{{route('products.list')}}"><button>Back</button></a>
        </tr>
{{--    @endforeach--}}
    </tbody>
</table>
@endsection
