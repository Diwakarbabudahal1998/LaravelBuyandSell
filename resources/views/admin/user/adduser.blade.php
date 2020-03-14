
@extends('adminlte::page')

@section('title', 'Add Users')

@section('content_header')
<div class="admin-title">Add User</div>
<hr>
@stop

@section('content')


<form method="POST" action="/admin/user/create/submit">

@csrf

  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="Username">User Name</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="Phone">Phone</label>
    <input type="phone" class="form-control" id="phone" name="phone" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="address" class="form-control" id="address" name="address" placeholder="address">
  </div>
  <div class="form-group">
  <label for="Role">Assign Role</label><br>
 @foreach($role as $roles)
  <input type="checkbox" id="role" name="roles[]" value="{{$roles->id}}" class="ml-4">{{$roles->name}} 
@endforeach

  </div>
 
  <a href=""><button class="btn btn-primary">Add User</button></a>
</form>

@stop

@include('layouts.admin')