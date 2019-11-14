@extends('layout.master')

@section('title','User | Index')

@section('content')
<h1 class="display-4">Users</h1>

<div class="row my-4">
    <div class="col">
        <a href="{{route('user.create')}}" class="btn btn-primary float-right">Add User</a>
    </div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone->phone}}</td>
            <td>
                <a href="{{route('user.edit',$user->id)}}" class="btn btn-dark">Edit</a>
            </td>
            <td>
                <form method="POST" action="{{route('user.destroy',$user->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection