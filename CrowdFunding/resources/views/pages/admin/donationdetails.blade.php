@extends('layouts.adminapp')
@section('content')
    <h2>Donor Details</h2><br>
    <h5>Donor Id: {{$donation->donordetails->id}}</h5>
    <h5>Order By: {{$donation->donordetails->name}}</h5>
    <h5>Phone: {{$donation->donordetails->phone}}</h5>
    <br><br>
    <h4>Donation Details </h4>
    <table class="table table-bordered">
        <tr>
            <td>Project Id</td>
            <td>Amount</td>
        </tr>

        <tr>
            <td>{{$donation->id}}</td>
            <td>{{$donation->ammount}}</td>
        </tr>
    </table>
    <a href="{{route('donor.list',['id'=>$donation->project_id])}}" class="btn btn-secondary" >Back</a>
@endsection