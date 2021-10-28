@extends('layouts.customerapp')
@section('content')
<h2>Customer Dashboard</h2><br>
<a href="{{route('products.list')}}"><button type="button" class="btn btn-primary" >Shop</button></a><br><br>
@if(Session::has('user'))
<a class="btn btn-primary" href="{{route('products.myorders')}}"> My Orders </a>
@endif
@endsection

