@extends('layouts.app')
@section('content')
    <form action="{{route('inventory.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <div class="col-md-4 form-group">
            <span>Id</span>
            <input type="integer" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Price</span>
            <input type="float" name="price" value="{{old('price')}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="integer" name="quantity" value="{{old('quantity')}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{old('description')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection