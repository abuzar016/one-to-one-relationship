@extends('layout.master')

@section('title','Phone | Index')

@section('content')
<h1 class="display-4">Phones</h1>

<table class="table table-bordered my-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Phone</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($phones as $phone)
        <tr>
            <th>{{$phone->id}}</th>
            <td>{{$phone->phone}}</td>
            <td>{{$phone->user->name}}</td>
            <td>{{$phone->user->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection