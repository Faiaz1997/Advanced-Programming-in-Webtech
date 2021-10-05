@extends('layouts.app')
@section('content')
<form action="{{route('inventory.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$inventory->id}}">
        <div class="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="id" value="{{$inventory->id}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$inventory->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Price</span>
            <input type="integer" name="price" value="{{$inventory->price}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="integer" name="quantity" value="{{$inventory->quantity}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{$inventory->description}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection