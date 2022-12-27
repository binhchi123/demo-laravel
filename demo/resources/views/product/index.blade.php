@extends('layouts.master')
@section('main')
<div class="container mt-4">
    <form action="" method="get" class="form-inline">
        <div class="form-group">
            <input type="text" name="keyword" id="" class="form-control" placeholder="search" aria-describedby="helpId">
        </div>
        <a href="{{route('product.create')}}" class="btn btn-info ml-5">Add product</a>
    </form>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>{{number_format($pro->price)}}/<span>{{number_format($pro->sale_price)}}</span></td>
                <td>
                    <img src="{{url('uploads')}}/{{$pro->image}}" alt="">
                </td>
                <td>{{$pro->status == 0 ? 'tam an' : 'hien thi'}}</td>
                <td>
                    <form action="{{route('product.destroy', $pro->id)}}" method="post">
                        @csrf @method('DELETE')
                        <a href="{{route('product.edit', $pro->id)}}" class="btn btn-success">Edit</a>
                        <button href="" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()