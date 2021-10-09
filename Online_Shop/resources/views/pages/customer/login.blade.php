@extends('layouts.app')
@section('content')
    <form action="{{route('customer.login')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="integer" name="phone" value="{{old('phone')}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Login" >
    </form>
@endsection