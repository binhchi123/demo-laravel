@extends('layouts.master')
@section('main')
<div class="container mt-5">
    <form action="{{route('product.store')}}" method="post" role="form">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="upload" id="" class="form-control" placeholder="">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">category_id</label>
                    <select name="category_id" id="">
                        <option value="">chon danh muc</option>
                        @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Sale price</label>
                    <input type="text" name="sale_price" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <label for="">Content</label>
        <textarea name="content" id="" class="form-control"></textarea>
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
        <button type="submit" class="btn btn-primary mt-5">submit</button>
    </form>
</div>
@stop()