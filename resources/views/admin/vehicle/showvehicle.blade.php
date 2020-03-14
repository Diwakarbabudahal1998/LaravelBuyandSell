@extends('adminlte::page')

@section('title', 'View Vehicle')


@section('content_header')
@stop

@section('content')
<div class="container-fluid">
<form method="POST" action="" >
<h3 class="subheadline my-4 text-uppercase font-weight-bold text-danger">VEHICLE DETAILS</h3>   
<div class="row mb-2">
    <div class="input-group col-md-6 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Company Name</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['company_name']:''}}" name="company_name" class="form-control"disabled/>
    </div>
  <div class="input-group col-md-4 mb-2 mr-sm-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-success">Model Name</div>
    </div>
    <input type="text" value="{{($vehicle)?$vehicle['model_name']:''}}" name="model_name" class="form-control"disabled/>
  </div>
</div>
<div class="input-group col-md-4 mb-2 mr-sm-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-success">Number</div>
    </div>
    <input type="text" value="{{($vehicle)?$vehicle['number']:''}}" name="number" class="form-control"disabled/>
  </div>
</div>
<div class="input-group col-md-4 mb-2 mr-sm-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-success">Purchased Date</div>
    </div>
    <input type="text" value="{{($vehicle)?$vehicle['purchased_date']:''}}" name="purchased_date" class="form-control"disabled/>
  </div>
</div>
<div class="input-group col-md-4 mb-2 mr-sm-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-success">Vehicle Price</div>
    </div>
    <input type="number" value="{{($vehicle)?$vehicle['vehicle_price']:''}}" name="vehicle_price" class="form-control"disabled/>
  </div>
</div>
<div class="row">
    <div class="input-group col-md-6 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Price Status</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['price_status']:''}}" name="price_status" class="form-control"disabled/>
    </div>
    </div>
 

  <h3 class="subheadline my-4 text-uppercase font-weight-bold text-danger">INFORMATION</h3>   
<div class="row"> 
<div class="input-group col-md-5 mb-2 mr-sm-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-success">Dimension and Weight</div>
    </div>
    <input type="text" value="{{($vehicle)?$vehicle['dimension_weight']:''}}" name="dimension_weight" class="form-control"disabled/>
  </div>
</div>  
  <div class="input-group col-md-5 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Ground Clearance</div>
        </div>
        <input type="number" value="{{($vehicle)?$vehicle['ground_clearance']:''}}" name="ground_clearance" class="form-control"disabled/>
  </div>
  <div class="input-group col-md-3 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Seat Capacity</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['seat_capacity']:''}}" name="seat_capacity" class="form-control"disabled/>
  </div>
  <div class="input-group col-md-3 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Fuel Tank Capacity</div>
        </div>
        <input type="number" value="{{($vehicle)?$vehicle['fuel_tank_capacity']:''}}" name="fuel_tank_capacity" class="form-control"disabled/>
   </div>
 


    <div class="input-group col-md-4 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Current Milage</div>
        </div>
        <input type="number" value="{{($vehicle)?$vehicle['current_milage']:''}}" name="current_milage" class="form-control"disabled/>
  </div>
      
    <div class="input-group col-md-3 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Vehicle Color</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['vehicle_color']:''}}" name="vehicle_color" class="form-control"disabled/>
  </div>
  <div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Number of Doors</div>
        </div>
        <input
          type="number"
          class="form-control "
          placeholder=""
          id="number_of_doors"
          name="number_of_doors"
          value="{{$vehicle['number_of_doors']}}"
          disabled
        />  </div>
  <div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Condition</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['condition']:''}}" name="condition" class="form-control"disabled/>
  
</div>
<div class="row">
  <div class="input-group col-md-4 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Kilometer Run</div>
        </div>
        <input
          type="number"
          class="form-control"
          placeholder=""
          id="kilometer_run"
          name="kilometer_run"
          value="{{$vehicle['kilometer_run']}}"
          disabled
        />  
    </div>
    <div class="input-group col-md-4 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Lot Number</div>
        </div>
        <input
          type="number"
          class="form-control form-control"
          placeholder=""
          id="lot_number"
          name="lot_number"
          value="{{$vehicle->lot_number}}"
          disabled
        />
    </div>
</div>
<div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Engine</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['engine']:''}}" name="engine" class="form-control"disabled/>
  </div>
</div>
<div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Tax Status</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['tax_status']:''}}" name="tax_status" class="form-control"disabled/>
  </div>
</div>
<div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Fuel Type</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['fuel_type']:''}}" name="fuel_type" class="form-control"disabled/>
  </div>
</div>




  
<div class="form-group">
  <h3 class="subheadline my-4  text-uppercase font-weight-bold text-danger">Additional Features</h3> 
    <div class="feature-list three_cols">
      <div> 
        <?php $yes=''; $no='';
        if($vehicle['power_window']=='yes')
          {
            $yes='<span class="badge badge-pill bg-success">Yes</span>';
          }
        else
          {
            $yes='<span class="badge badge-pill bg-danger">No</span>';
          }
          ?>
        <div>
          <label for="power_window" class="mr-2">Power Windou</label>{!!$yes!!}
        </div>
    </div>
   

      <div>
       <?php $yes=''; $no='';
          if($vehicle['power_steering']=='yes')
            {
            $yes='<span class="badge badge-pill bg-success">Yes</span>';
            }
          else
            {
            $yes='<span class="badge badge-pill bg-danger">No</span>';
            }
        ?>
        <div>
        <label for="power_steering" class="mr-2">Gym</label>{!!$yes!!}
        </div>
      </div>

      <div>
      <?php $yes=''; $no='';
    if($vehicle['central_lock']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="central_lock" class="mr-2">Central Lock</label>{!!$yes!!}
      </div>

      <div>
      <?php $yes=''; $no='';
    if($vehicle['key_remote_entry']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="key_remote_entry" class="mr-2">Key Remote Entry</label>{!!$yes!!}
      </div>

      <div >
      <?php $yes=''; $no='';
    if($vehicle['tubeless_tyres']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="tubeless_tyres" class="mr-2">Tubeless Tyres</label>{!!$yes!!}
      </div>
      <div>
      <?php $yes=''; $no='';
    if($vehicle['air_bags']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        
        <label for="air_bags" class="mr-2">Air Bags</label>{!!$yes!!}
      </div>
      <div >
      <?php $yes=''; $no='';
    if($vehicle['anti_lock_braking']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="anti_lock_braking" class="mr-2">Anti Lock Braking</label>{!!$yes!!}
      </div>
      <div>
      <?php $yes=''; $no='';
    if($vehicle['steering_mounted_controls']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="steering_mounted_controls" class="mr-2">Steering Mounted Controls</label>{!!$yes!!}
      </div>
      <div >
      <?php $yes=''; $no='';
    if($vehicle['electric_side_mirror']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="electric_side_mirror" class="mr-2">Electric Side Mirror</label>{!!$yes!!}
      </div>
      <div >
      <?php $yes=''; $no='';
    if($vehicle['child_safety_lock']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="child_safety_lock" class="mr-2">Child Safety Lock</label>{!!$yes!!}
      </div>
      <div >
      <?php $yes=''; $no='';
    if($vehicle['passenger_seat_adjustment']=='yes')
    {
      $yes='<span class="badge badge-pill bg-success">Yes</span>';
    }
    else
    {
      $yes='<span class="badge badge-pill bg-danger">No</span>';
    }
    ?>
        <label for="passenger_seat_adjustment" class="mr-2">Passenger Seat Adjustment</label>{!!$yes!!}
      </div>
      <div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">Driver Seat Adjustment</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['driver_seat_adjustment']:''}}" name="driver_seat_adjustment" class="form-control"disabled/>
  </div>
  <div class="input-group col-md-2 mb-2 mr-sm-2 ">
        <div class="input-group-prepend">
            <div class="input-group-text bg-success">AC</div>
        </div>
        <input type="text" value="{{($vehicle)?$vehicle['ac']:''}}" name="ac" class="form-control"disabled/>
  </div>
    </div>
  </div>

    
  
  <div class="form-group mb-5">
    <h3 class="subheadline my-4  text-uppercase font-weight-bold text-danger">Vehicle Description</h3> 
    <textarea
      class="form-control form-control-lg text-editor mb-5"
      name="documents"
      id="documents"
      rows="4"
      readonly
    >{{$vehicle['documents']}}</textarea>
  </div>
</form>
@stop

@include('layouts.admin')
