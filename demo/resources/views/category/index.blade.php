@extends('layouts.master')
@section('main')
<div class="container mt-4">
    <form action="" method="get" class="form-inline">
        <div class="form-group">
            <input type="text" name="keyword" id="" class="form-control" placeholder="search" aria-describedby="helpId">
        </div>
        <a href="{{route('category.create')}}" class="btn btn-info ml-5">Add category</a>
    </form>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->status == 0 ? 'tam an' : 'hien thi'}}</td>
                <td>
                    <form action="{{route('category.destroy', $cat->id)}}" method="post">
                        @csrf @method('DELETE')
                        <a href="{{route('category.edit', $cat->id)}}" class="btn btn-success">Edit</a>
                        <button href="" class="btn btn-danger" onclick="return confirm('chac chua')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()