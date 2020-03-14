{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Real Estate')

@section('content_header')
<h4>AboutUs</h4>
<hr>

@stop

@section('content')
<a href="aboutus/create"><button class="btn btn-success">Add new Content </button></a>
    <table class="table table-bordered table-striped mt-4">
  <thead>
  <tr>     
     
     <th scope="col">Headings</th>
     <th scope="col">Description</th>
     <th scope="col"></th>

   </tr>
 </thead>
 <tbody>
 @foreach($about as $r)
   <tr>
   <td>{{$r->aboutus_heading??''}}</td>
   <td>{{$r->aboutus_description??''}}</td>

   <td>
   <a href="/admin/aboutus/{{$r->id}}/show" class="btn btn-info pull-left my-1 ml-1 mr-1">View</a>
    <a href="/admin/aboutus/{{$r->id}}/edit" class="btn btn-primary pull-left my-1 ml-1 mr-1">Edit</a>
  <a href="/admin/aboutus/{{$r->id}}/delete" onclick="return confirm('Are you sure?')" class="btn btn-danger pull-left my-1 ml-1">Delete</a>

                    </td>
</tr>
@endforeach
</tbody>
</table>
{{ $about->links() }}

@stop

@include('layouts.admin')