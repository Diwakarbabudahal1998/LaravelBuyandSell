{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Real Estate')

@section('content_header')
<h4>AboutUs</h4>
<hr>

@stop

@section('content')

<h2 class="font-weight-bold">{{$about->aboutus_heading}}</h2>
<p class="text-justify pt-3">{{$about->aboutus_description}}</p>
@stop

@include('layouts.admin')