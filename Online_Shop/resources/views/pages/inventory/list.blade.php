@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($inventory as $inventory)
            <tr>
                <td>{{$inventory->id}}</td>
                <td>{{$inventory->name}}</td>
                <td>{{$inventory->price}}</td>
                <td>{{$inventory->quantity}}</td>
                <td>{{$inventory->description}}</td>
                <td><a href="/inventory/edit/{{$inventory->id}}/{{$inventory->name}}">Edit</a></td>
                <td><a href="/inventory/list/{{$inventory->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection