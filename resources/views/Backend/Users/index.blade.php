@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Admin users</h1>
@stop

@section('content')
    

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha de registro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop