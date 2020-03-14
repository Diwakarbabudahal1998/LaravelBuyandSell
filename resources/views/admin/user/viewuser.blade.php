@extends('adminlte::page')

@section('title', 'View Users')
@section('content_header')
<div class="admin-title">Users</div>
<hr>
@stop


@section('content')
    <a href="/admin/user/create" class="btn btn-success my-2">Add User</a>
   <div class="table-responsive">
   
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                    <a href="/admin/user/edit/{{$user->id}}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                    <a href="/admin/user/delete/{{$user->id}}" class="btn btn-danger pull-left"onclick="return confirm('Are you sure?')" style="margin-right: 3px;">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


</div>
@stop

@include('layouts.admin')