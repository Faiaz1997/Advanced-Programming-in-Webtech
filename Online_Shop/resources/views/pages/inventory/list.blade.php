@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($inventory as $inventory)
            <tr>
                <td>{{$inventory->name}}</td>
                <td>{{$inventory->price}}</td>
                <td>{{$inventory->quantity}}</td>
                <td>{{$inventory->description}}</td>
                <td><a href="/inventory/edit/{{$inventory->product_id}}}"><button class="btn btn-info" style="text-decoration: none">Edit</button></a></td>
                <td><a href="/inventory/list/{{$inventory->product_id}}"><button type="button" class="btn btn-danger" style="text-decoration: none">Delete</button></a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('admin.dashboard')}}" class="btn btn-secondary" >Back</a>
@endsection