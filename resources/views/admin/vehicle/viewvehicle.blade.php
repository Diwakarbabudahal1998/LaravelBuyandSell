{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Vehicle')

@section('content_header')
<h4>Vehicle</h4>
<hr>

@stop

@section('content')
    <a href="vehicle/create"><button class="btn btn-success">Add Vehicle   </button></a>
    <table class="table table-bordered table-striped mt-4">
  <thead>
  <tr>     
  <th scope="col">Company Name</th>
     <th scope="col">Model Name</th>
     <th scope="col">Vehicle Status</th>
     <th scope="col">Vehicle Price</th>
     <th scope="col">Status</th>
     <th scope="col"></th>

   </tr>
 </thead>
 <tbody>
 @foreach($vehicle as $v)
   <tr>
   <td>{{$v->company_name??''}}</td>
   <td>{{$v->model_name??''}}</td>
   <td>{{$v->price_status??''}}</td>
   <td>{{$v->vehicle_price??''}}</td>
   <td>{{$v->status??''}}</td>

   <td>
   <div class="row">
   <a href="/admin/vehicle/{{$v->id}}" class="btn btn-info pull-left my-1 ml-1 mr-1">View</a>
  <a href="/admin/vehicle/{{$v->id}}/edit" class="btn btn-primary pull-left my-1 ml-1 mr-1"> Edit</a>
  <form action="/admin/vehicle/{{$v->id}}" method='POST'>
  <button type='submit' onclick="return confirm('Are you sure?')" class="btn btn-danger pull-left my-1 ml-1">Delete</button>
{{method_field('DELETE')}}
@csrf
</form>
</div>


                    </td>
</tr>
@endforeach
</tbody>
</table>

@stop

@include('layouts.admin')