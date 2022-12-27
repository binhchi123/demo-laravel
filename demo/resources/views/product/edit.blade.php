@extends('layouts.master')
@section('main')
<div class="container mt-5">
    <form action="{{route('product.update', $product->id)}}" method="post" role="form">
        @csrf @method('PUT')
        <input type="hidden" name="id" value="$product->id">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" value="{{$product->name}}" class="form-control" placeholder=""
                        aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="text" name="image" id="" value="{{$product->image}}" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">category_id</label>
                    <select name="category_id" id="">
                        <option value="">chon danh muc</option>
                        @foreach($cats as $cat)
                        <option value="{{$cat->id}}" {{$cat->id == $product->category_id ? 'selected' : ''}}>
                            {{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="price" id="" value="{{$product->price}}" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Sale price</label>
                    <input type="text" name="sale_price" id="" value="{{$product->sale_price}}" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <label for="">Content</label>
        <textarea name="content" id="" class="form-control">{{$product->content}}</textarea>
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
        <button type="submit" class="btn btn-primary mt-5">submit</button>
    </form>
</div>
@stop()