
@extends('backend.layouts.master')
@section('title','Admin')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
        <input type="text" name="category">
        <input type="file" name="file">
        <button type="submit">Add product</button>
{{--        <a href="{{route('products.list')}}"><button>Back</button></a>--}}
    </form>
    <a href="{{route('products.list')}}"><button>Back</button></a>

@endsection
