@extends('layout.master')

@section('title','User | Create')

@section('content')

<h1 class="display-4">Add User</h1>

<div class="row">
    <div class="col-6">
        <form method="post" action="{{route('user.store')}}">
            @csrf
            <div class="form-group">
                <label>Name</label>
            <input type="text" name="name"  class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection