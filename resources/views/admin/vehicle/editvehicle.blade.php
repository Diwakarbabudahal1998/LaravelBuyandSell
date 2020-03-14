
@extends('adminlte::page')

@section('title', 'Update Vehicle')


@section('content_header')
<div class="row">
<div class="admin-title col-md-10">Edit Vehicle</div>

<div class="form-group col-md-2">

<a href="/admin/vehicles/{{$vehicle->id}}/photos" class="btn btn-info pull-left my-1 ml-1 mr-1">Edit Document</a>
</div></div>
<hr>

@stop

@section('content')
<div class="container-fluid">


<form method="POST" action="/admin/vehicle/{{$vehicle->id}}" enctype="multipart/form-data">
@csrf
{{method_field('PUT')}}


<div class="form-group col-md-6"  @if ($errors->has('company_name')) has-error @endif>
    <label for="company_name">Company Name</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      name="company_name"
      class="form-control form-control-lg"
      placeholder="Company Name"
      value="{{$vehicle->company_name}}"
      id="company_name"
      autofocus

    />
    @if ($errors->has('company_name')) <p class="text-danger">{{ $errors->first('company_name') }}</p> @endif
  </div>
  <div class="form-group col-md-6" @if ($errors->has('model_name')) has-error @endif>
    <label>Model Name</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      placeholder="Model Name"
      name="model_name"
      value="{{$vehicle->model_name}}"
      class="form-control form-control-lg"
      />
      @if ($errors->has('model_name')) <p class="text-danger">{{ $errors->first('model_name') }}</p> @endif
      </div>
      <div class="form-group col-md-6" @if ($errors->has('number')) has-error @endif>
    <label>Number</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      placeholder="Number"
      name="number"
      value="{{$vehicle->number}}"
      class="form-control form-control-lg"
      />
      @if ($errors->has('number')) <p class="text-danger">{{ $errors->first('number') }}</p> @endif
      </div>
      <div class="form-group col-md-6" @if ($errors->has('purchased_date')) has-error @endif>
    <label>Purchased Date</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      placeholder="YYYY/MM/DD"
      name="purchased_date"
      value="{{$vehicle->purchased_date}}"
      class="form-control form-control-lg"
      />
      @if ($errors->has('purchased_date')) <p class="text-danger">{{ $errors->first('purchased_date') }}</p> @endif
      </div>
  <div class="form-group col-md-6" @if ($errors->has('vehicle_price')) has-error @endif>
    <label>Price</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Price"
      name="vehicle_price"
      value="{{$vehicle->vehicle_price}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('vehicle_price')) <p class="text-danger">{{ $errors->first('vehicle_price') }}</p> @endif
  </div>
  <div class="form-group col-md-6"@if ($errors->has('price_status')) has-error @endif>
    <label>Is  Price Fixed/Negotiable?</label>   <span class="text-danger font-weight-bold">*</span>
    <div>
    <?php $f='';$n='';
    if($vehicle['price_status']=='fixed')
    {
      $f='checked';
    }
    else
    {
      $n='checked';
    }
    ?>
      <div class="radio radio-inline">
        <input type="radio" name="price_status" id="fixed" value="fixed"{!!$f!!} />
        <label for="fixed">Fixed</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="price_status" id="negotiable" value="negotiable"{!!$n!!} />
        <label for="negotiable">Negotiable</label>
      </div>
      @if ($errors->has('price_status')) <p class="text-danger">{{ $errors->first('price_status') }}</p> @endif
    </div>  </div>
    
     
  
  
  <h3 class="subheadline my-4 text-uppercase font-weight-bold text-danger">Vehicle Information</h3>   
  <div class="row">
  <div class="form-group col-md-6" @if ($errors->has('dimension_weight')) has-error @endif>
    <label>Dimension and Weight</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      placeholder="Dimension and Weight"
      name="dimension_weight"
      value="{{$vehicle->dimension_weight}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('dimension_weight')) <p class="text-danger">{{ $errors->first('dimension_weight') }}</p> @endif
  </div>
  <div class="form-group col-md-6" @if ($errors->has('ground_clearance')) has-error @endif>
    <label>Ground Clearance</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Ground Clearance"
      name="ground_clearance"
      value="{{$vehicle->ground_clearance}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('ground_clearance')) <p class="text-danger">{{ $errors->first('ground_clearance') }}</p> @endif
  </div>
  <div class="form-group col-md-6" @if ($errors->has('seat_capacity')) has-error @endif>
    <label>Seat Capacity</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Seat Capacity"
      name="seat_capacity"
      value="{{$vehicle->seat_capacity}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('seat_capacity')) <p class="text-danger">{{ $errors->first('seat_capacity') }}</p> @endif
  </div>
  <div class="form-group col-md-6" @if ($errors->has('fuel_tank_capacity')) has-error @endif>
    <label>Fuel Tank Capacity(Liter )</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Fuel Tank Capacity"
      name="fuel_tank_capacity"
      value="{{$vehicle->fuel_tank_capacity}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('fuel_tank_capacity')) <p class="text-danger">{{ $errors->first('fuel_tank_capacity') }}</p> @endif
  </div>
  <div class="form-group col-md-6" @if ($errors->has('current_milage')) has-error @endif>
    <label>Milage</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Current Milage"
      name="current_milage"
      value="{{$vehicle->current_milage}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('current_milage')) <p class="text-danger">{{ $errors->first('current_milage') }}</p> @endif
  </div>
  <div class="form-group col-md-6">
    <label>Color</label>   <span class="text-danger font-weight-bold" @if ($errors->has('vehicle_color')) has-error @endif>*</span>
    <input
      type="text"
      placeholder="Color"
      name="vehicle_color"
      value="{{$vehicle->vehicle_color}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('vehicle_color')) <p class="text-danger">{{ $errors->first('vehicle_color') }}</p> @endif
  </div>
  <div class="form-group col-md-6" @if ($errors->has('number_of_doors')) has-error @endif>
    <label>Number of Doors</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Number of Doors"
      name="number_of_doors"
      value="{{$vehicle->number_of_doors}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('number_of_doors')) <p class="text-danger">{{ $errors->first('number_of_doors') }}</p> @endif
  </div>
  

  
  
  <div class="form-group col-md-6" @if ($errors->has('condition')) has-error @endif>
    <label>Condition</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      placeholder="condition"
      name="condition"
      value="{{$vehicle->condition}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('condition')) <p class="text-danger">{{ $errors->first('condition') }}</p> @endif
    
  </div>

  <div class="form-group col-md-6" @if ($errors->has('kilometer_run')) has-error @endif>
    <label>Kilometer Run</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="KM"
      name="kilometer_run"
      value="{{$vehicle->kilometer_run}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('kilometer_run')) <p class="text-danger">{{ $errors->first('kilometer_run') }}</p> @endif
    
  </div>
  <div class="form-group col-md-6" @if ($errors->has('lot_number')) has-error @endif>
    <label>Lot Number</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Lot Number"
      name="lot_number"
      value="{{$vehicle->lot_number}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('lot_number')) <p class="text-danger">{{ $errors->first('lot_number') }}</p> @endif
  </div>

  <div class="form-group col-md-6" @if ($errors->has('engine')) has-error @endif>
    <label>Engine(CC)</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      placeholder="Engine"
      name="engine"
      value="{{$vehicle->engine}}"
      class="form-control form-control-lg"
    />
    @if ($errors->has('engine')) <p class="text-danger">{{ $errors->first('engine') }}</p> @endif
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6"  @if ($errors->has('tax_status')) has-error @endif>
    <label>Is  Tax Cleared/Remaining?</label>   <span class="text-danger font-weight-bold">*</span>
    <div>
    <?php $cleared='';$remaining='';
    if($vehicle['tax_status']=='Cleared')
    {
      $cleared='checked';
    }
    else
    {
      $remaining='checked';
    }
    ?>
      <div class="radio radio-inline">
        <input type="radio" name="tax_status" id="Cleared" value="Cleared"{!!$cleared!!} />
        <label for="Cleared">Cleared</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="tax_status" id="Remaining" value="Remaining"{!!$remaining!!} />
        <label for="Remaining">Remaining</label>
      </div>
      @if ($errors->has('tax_status')) <p class="text-danger">{{ $errors->first('tax_status') }}</p> @endif
    </div>
  </div>
  <div class="form-group col-md-6" @if ($errors->has('fuel_type')) has-error @endif>
    <label>Fuel Type</label>   <span class="text-danger font-weight-bold">*</span>
    <div>
    <?php $p='';$d='';
    if($vehicle['fuel_type']=='petrol')
    {
      $p='checked';
    }
    else
    {
      $d='checked';
    }
    ?>
      <div class="radio radio-inline">
        <input type="radio" name="fuel_type" id="petrol" value="petrol"{!!$p!!} />
        <label for="petrol">Petrol</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="fuel_type" id="diesel" value="diesel"{!!$d!!} />
        <label for="diesel">Diesel</label>
      </div>
      @if ($errors->has('fuel_type')) <p class="text-danger">{{ $errors->first('fuel_type') }}</p> @endif
    </div>
  </div>
  </div>
  <div class="form-group">
    <h3 class="subheadline  my-4  text-uppercase font-weight-bold text-danger">Additional Features</h3>
    <div class="feature-list ">
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['power_window']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="power_window" name="power_window" value="yes"{!!$yes!!} />
        <label for="power_window">Power Window</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['power_steering']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="power_steering" name="power_steering" value="yes"{!!$yes!!}/>
        <label for="power_steering">Power Steering</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['central_lock']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="central_lock" name="central_lock" value="yes"{!!$yes!!}/>
        <label for="central_lock">Central Lock</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['key_remote_entry']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="key_remote_entry" name="key_remote_entry" value="yes"{!!$yes!!}/>
        <label for="key_remote_entry">Key Remote Entry</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['tubeless_tyres']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="tubeless_tyres" name="tubeless_tyres" value="yes"{!!$yes!!}/>
        <label for="tubeless_tyres">Tubeless Tyres</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['air_bags']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="air_bags" name="air_bags" value="yes"{!!$yes!!}/>
        <label for="air_bags">Air Bags</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['anti_lock_braking']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="anti_lock_braking" name="anti_lock_braking" value="yes"{!!$yes!!}/>
        <label for="anti_lock_braking">Anti-lock Braking(ABS)</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['steering_mounted_controls']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="steering_mounted_controls" name="steering_mounted_controls" value="yes"{!!$yes!!}/>
        <label for="steering_mounted_controls">Streeing Mounted Control</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['electric_side_mirror']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="electric_side_mirror" name="electric_side_mirror" value="yes"{!!$yes!!}/>
        <label for="electric_side_mirror">Electric-side Mirror(ORVM)</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['child_safety_lock']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="child_safety_lock" name="child_safety_lock" value="yes"{!!$yes!!}/>
        <label for="child_safety_lock">Child Safety Lock</label>
      </div>
      <div class="checkbox">
      <?php $yes=''; $no='';
    if($vehicle['passenger_seat_adjustment']=='yes')
    {
      $yes='checked';
    }
    else
    {
      $no="checked";
    }
    ?>
        <input type="checkbox" id="passenger_seat_adjustment" name="passenger_seat_adjustment" value="yes"{!!$yes!!}/>
        <label for="passenger_seat_adjustment">Passenger Seat Adjustment</label>
      </div>
      <div class="row">
  <div class="form-group col-md-6">
    <label>AC</label>   <span class="text-danger font-weight-bold"></span>
    <div>
      <div class="radio radio-inline">
    
        <input type="radio" name="ac" id="manual" value="manual"/>
        <label for="manual">Manual</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="ac" id="automatic" value="automatic"/>
        <label for="automatic">Automatic</label>
      </div>
    </div>
  </div>
  <div class="form-group col-md-6">
  
    <label>Driver Seat Adjustment</label>   <span class="text-danger font-weight-bold"></span>
    <div>
      <div class="radio radio-inline">
        <input type="radio" name="driver_seat_adjustment" id="m" value="manual" />
        <label for="m">Manual</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="driver_seat_adjustment" id="a" value="automatic" />
        <label for="a">Automatic</label>
      </div>
    </div>
  </div>
    
    </div>
  </div>
 
     
  <div class="form-group">
    <label> Vehicle Description</label>  <span class="text-danger font-weight-bold">*</span>
    <textarea
      class=" documents form-control form-control-lg text-editor"
      name="documents"
      id="documents"
    >{{$vehicle['documents']}}</textarea>
  </div>
 
  <div class="form-group">
    <div class="checkbox">
      <input type="checkbox" id="featured" name="featured"/>
      <label for="featured">Yes ‚ feature this listing. </label>
    </div>
  </div>
 
 
  
  <hr />
  <div class="form-group">
    <button type="submit" class="btn btn-lg btn-primary">
      Save
    </button>
  </div>
</form>
</div>
@stop

@include('layouts.admin')
