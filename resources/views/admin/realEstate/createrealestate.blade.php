
@extends('adminlte::page')

@section('title', 'Create RealEstate')


@section('content_header')
<div class="admin-title">Add Realestate</div>
<hr>
@stop

@section('content')
<div class="container-fluid">
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<form method="POST" action="/admin/realestate" enctype="multipart/form-data">
@csrf


  <div class="form-group col-md-6">
    <label for="property_name">Property Title</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="text"
      name="property_name"
      class="form-control form-control-lg"
      placeholder="Property Title"

      id="property_name"
      autofocus
    />
  </div>
  <div class="form-group col-md-6">
    <label>Price</label>   <span class="text-danger font-weight-bold">*</span>
    <input
      type="number"
      placeholder="Price"
      name="property_price"
      class="form-control form-control-lg"
    />
  </div>
  
  <div class="form-group col-md-6">
    <label>For Sale/Rent?</label>   <span class="text-danger font-weight-bold">*</span>
    <div>
      <div class="radio radio-inline">
        <input type="radio" name="property_status" id="rent" value="rent" />
        <label for="rent">Rent</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="property_status" id="sale" value="sale" />
        <label for="sale">Sale</label>
      </div>
    </div>
  </div>
  
  <div class="form-group col-md-6">
    <label>Is  Price Fixed/Negotiable?</label>   <span class="text-danger font-weight-bold">*</span>
    <div>
      <div class="radio radio-inline">
        <input type="radio" name="price_status" id="fixed" value="fixed" />
        <label for="fixed">Fixed</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="price_status" id="negotiable" value="negotiable" />
        <label for="negotiable">Negotiable</label>
      </div>
    </div>
  </div>
  <h3 class="subheadline my-4 text-uppercase font-weight-bold text-danger">Location</h3>   
  <div class="row">
      
    <div class="col-lg-5">
      <div class="form-group">
        <label>Address</label>   <span class="text-danger font-weight-bold">*</span>
        <input
          type="text"
          class="form-control form-control-lg"
          id="address"
          name="address"
          placeholder="Address"
        />
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label>City</label>   <span class="text-danger font-weight-bold">*</span>
        <input
          type="text"
          class="form-control form-control-lg"
          id="city"
          name="city"
          placeholder="City"
        />
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label>District</label>   <span class="text-danger font-weight-bold">*</span>
        <input
          type="text"
          class="form-control form-control-lg"
          id="district"
          name="district"
          placeholder="District"
        />
      </div>
    </div>
  </div>
  <div class="row">

    <div class="col-lg-4">
      <div class="form-group">
        <label>Country</label>   <span class="text-danger font-weight-bold">*</span>
        <input
          type="text"
          class="form-control form-control-lg"
          id="country"
          name="country"
          placeholder="Country"
        />
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label>Province</label>  <span class="text-danger font-weight-bold">*</span>
        <input
          type="number"
          class="form-control form-control-lg"
          id="province"
          name="province"
          placeholder="Province"
        />
      </div>
    </div>
    <div class="col-lg-2">
      <div class="form-group">
        <label>Ward No</label>  <span class="text-danger font-weight-bold">*</span>
        <input
          type="number"
          class="form-control form-control-lg"
          id="ward_number"
          name="ward_number"
          placeholder="Ward No"
        />
      </div>
      </div>
      <div class="col-lg-2">
      <div class="form-group">
        <label>Zipcode</label>  <span class="text-danger font-weight-bold">*</span>
        <input
          type="number"
          class="form-control form-control-lg"
          id="zip_code"
          name="zip_code"
          placeholder="Zip Code"
        />
      </div>
    </div>
  </div>
 
   
  </div>
  <div class="row">
  <div class="col-lg-4">
      <div class="form-group">
        <label>House Number</label>
        <input
          type="number"
          class="form-control form-control-lg"

          id="house_number"
          name="house_number"
          placeholder="House No."
        />
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Area Sq/ft</label>   <span class="text-danger font-weight-bold">*</span>
        <input
          type="number"
          class="form-control form-control-lg"
          id="property_area"
          name="property_area"
          placeholder="Area in Sq/Ft"
        />
      </div>
    </div>
  </div>
  <h3 class="subheadline my-4  text-uppercase font-weight-bold text-danger">Features</h3>   
  <div class="row">
    <div class="col-sm-3">
      <div class="form-group">
        <label for="bedrooms">Bedrooms</label>  <span class="text-danger font-weight-bold">*</span>
        <select
          name="number_of_bedrooms"
          id="number_of_bedrooms"
          class="form-control form-control-lg "
        >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7+">7+</option>
        </select>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
        <label for="number_of_bathrooms">Bathrooms</label>  <span class="text-danger font-weight-bold">*</span>
        <select
          name="number_of_bathrooms"
          id="number_of_bathrooms"
          class="form-control form-control-lg ui-select"
        >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5+">5+</option>
        </select>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
        <label for="bathrooms">Floors</label>  <span class="text-danger font-weight-bold">*</span>
        <select
          name="number_of_floors"
          id="number_of_floors"
          value="number_of_floors"
          class="form-control form-control-lg ui-select"
        >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5+">5+</option>
        </select>
      </div>
  </div>
  </div>
  <div class="row">
    
    <div class="col-md-6">
      <div class="form-group">
        <label>Building Age</label>  <span class="text-danger font-weight-bold">*</span>
        <input
          type="number"
          class="form-control form-control-lg"
          placeholder="Building Age"
          id="building_age"
          name="building_age" />
      </div>
    </div>
  </div>
 
  <div class="form-group">
    <h3 class="subheadline  my-4  text-uppercase font-weight-bold text-danger">Additional Features</h3>
    <div class="feature-list ">
      <div class="checkbox">
        <input type="checkbox" id="garden" name="garden" value="yes" />
        <label for="garden">Garden</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="gym" name="gym" value="yes"/>
        <label for="gyn">Gym</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="internet" name="internet" value="yes"/>
        <label for="internet">Internet</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="swimming_pool" name="swimming_pool" value="yes"/>
        <label for="pool">Swimming Pool</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="water" name="water" value="yes"/>
        <label for="water">Water</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="parking" name="parking" value="yes"/>
        <label for="parking">Parking</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="school_college_nearby" name="school_college_nearby" value="yes"/>
        <label for="school_college_nearby">School/College Nearby</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="shopping_nearby" name="shopping_nearby" value="yes"/>
        <label for="shopping_nearby">Shopping/GroceryNearby</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="bank_nearby" name="bank_nearby" value="yes"/>
        <label for="bank_nearby">Bank</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="pitched_road" name="pitched_road" value="yes"/>
        <label for="pitched_road">Pitched Road</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="airport_nearby" name="airport_nearby" value="yes"/>
        <label for="airport_nearby">Airport</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="sewage" name="sewage" value="yes"/>
        <label for="sewage">Sewage</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="alarm" name="alarm" value="yes"/>
        <label for="alarm">Alarm</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="cctv" name="cctv" value="yes" />
        <label for="cctv">CCTV Camera</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="ac" name="ac" value="yes"/>
        <label for="ac">Air Conditioning</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Property Description</label>  <span class="text-danger font-weight-bold">*</span>
    <textarea
      class=" description form-control form-control-lg text-editor"
      name="description"
      id="description"
    ></textarea>
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
