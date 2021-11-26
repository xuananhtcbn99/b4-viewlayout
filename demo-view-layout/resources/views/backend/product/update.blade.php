
@extends('backend.layouts.master')
@section('title','Admin')
@section('content')
    <form action="" method="post">
        @csrf
        <input type="text" name="name" value="{{$product->name}}">
        <input type="text" name="category" value="{{$product->category}}">
        <button type="submit">Save</button>
        <a href="{{route('products.list')}}"><button>Back</button></a>

    </form>
@endsection
