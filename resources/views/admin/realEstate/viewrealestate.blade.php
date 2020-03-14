{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Real Estate')

@section('content_header')
<h4>Realestate</h4>
<hr>

@stop

@section('content')
    <a href="realestate/create"><button class="btn btn-success">Add a Real Estate   </button></a>
    <table class="table table-bordered table-striped mt-4">
  <thead>
  <tr>     
     
     <th scope="col">Property Name</th>
     <th scope="col">Property Status</th>
     <th scope="col">Property Price</th>
     <th scope="col">Featured</th>
     <th scope="col"></th>

   </tr>
 </thead>
 <tbody>
 @foreach($realestate as $r)
   <tr>
   <td>{{$r->property_name??''}}</td>
   <td>{{$r->property_status??''}}</td>
   <td>{{$r->price_status??''}}</td>
   <td>{{$r->featured??''}}</td>

   <td>
   <a href="/admin/realestate/{{$r->id}}/photos" class="btn btn-info pull-left my-1 ml-1 mr-1">View</a>
    <a href="/admin/realestate/{{$r->id}}/edit" class="btn btn-primary pull-left my-1 ml-1 mr-1">Edit</a>
  <a href="/admin/realestate/{{$r->id}}/delete" onclick="return confirm('Are you sure?')" class="btn btn-danger pull-left my-1 ml-1">Delete</a>

                    </td>
</tr>
@endforeach
</tbody>
</table>
{{ $realestate->links() }}

@stop

@include('layouts.admin')