@extends('layouts.adminapp')
@section('content')
<h2>Welcome, {{ Session::get('user')}}</h2>
<a href="{{route('user.create')}}"><button type="button" class="btn btn-primary" >Add User</button></a>
<a href="{{route('user.list')}}"><button type="button" class="btn btn-primary" >User List</button></a>
<a href="{{route('project.list')}}"><button type="button" class="btn btn-primary" >Project List</button></a>
<a href="http://127.0.0.1:8000/api/admin/Donors"><button type="button" class="btn btn-primary" >Donors</button></a>
@endsection