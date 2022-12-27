@extends('layouts.master')
@section('main')
<div class="container mt-4">
    <form action="{{route('category.update', $category->id)}}" method="post" role="form">
        @csrf @method('PUT')
        <input type="hidden" name="id" value="$category->id">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" value="{{$category->name}}" class="form-control"
                        placeholder="name" aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <div class="radio">
                        <label for="">
                            <input type="radio" name="status" id="" value="1"
                                {{$category->status == 1 ? 'checked' : ''}}>Hien thi
                        </label>
                    </div>
                    <div class="radio">
                        <label for="">
                            <input type="radio" name="status" id="" value="0"
                                {{$category->status == 0 ? 'checked' : ''}}>Tam
                            an
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
</div>
@stop()