@extends('layouts.master')
@section('main')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->status == 0 ? 'tam an' : 'hien thi'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()