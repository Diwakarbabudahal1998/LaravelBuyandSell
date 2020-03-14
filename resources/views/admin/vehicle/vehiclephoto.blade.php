
@extends('adminlte::page')

@section('title', 'Photos')

@section('content_header')
<h1>Upload the Documents</h1>
@stop

@section('content')
@include('admin.dropzone')

<button class="btn btn-info mt-4 mb-2" onclick="location.reload();">Upload</button>
<h4 class="mt-4">Your Uploads</h4>
<table class="table table-responsive mt-2">
        <thead >
        <tr>
            <th>Your Photos</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($images as $value)  
   <tr>
       
              <td><img class="img-thumbnail" src="{{asset('storage/'.$value->photos)}}" style="width:150px"/></td>
              <td class="text-center">                        
              <a  class="btn btn-danger" onclick="return confirm('Are you sure?')" href="/admin/vehicle/{{$vehicles_id}}/photos/{{$value->id}}/delete" >Delete</a>

                    
                    </td>
            </tr>
              @endforeach
           

</tbody>

</table>
<a href="/admin/vehicle"class="btn btn-primary mt-4 mb-2">Save Changes</a>

@stop

@include('layouts.admin')