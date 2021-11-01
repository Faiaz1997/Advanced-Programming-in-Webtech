@extends('layouts.adminapp')
@section('content')
<form action="{{route('project.status')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$status->p_id}}">
        <div class="col-md-4 form-group">
            <span>Project Status</span>
            <select name="status" id="status" class="form-control">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
            </select>
            @error('status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        <input type="submit" class="btn btn-success" value="Update" >
        <a href="{{route('project.list')}}" class="btn btn-secondary" >Back</a>
    </form>

@endsection