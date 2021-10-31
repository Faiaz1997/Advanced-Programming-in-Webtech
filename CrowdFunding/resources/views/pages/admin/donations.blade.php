@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Ammount</th>
            <th></th>
        </tr>
        @foreach($alldonations as $alldonations)
            <tr>
                <td>{{$alldonations->donations->p_name}}</td>
                <td>{{$alldonations->donations->p_description}}</td>
                <td>{{$alldonations->ammount}}</td>
              
            </tr>
        @endforeach
    </table>
    <a href="{{route('all.donorlist')}}" class="btn btn-secondary" >Back</a>
@endsection