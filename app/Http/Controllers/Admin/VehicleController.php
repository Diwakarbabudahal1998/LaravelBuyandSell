<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use App\Models\VechileGallery;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\VehicleRequest;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle=Vehicle::where('status','active')->get();
        return view('admin.vehicle.viewvehicle',compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicle.createvehicle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        
        $vehicle=new Vehicle;
        $v=$request->validated();
        $vehicle->company_name=$request->company_name;
        $vehicle->model_name=$request->model_name;
        $vehicle->number=$request->number;
        $vehicle->purchased_date=$request->purchased_date;
        $vehicle->condition=$request->condition;
        $vehicle->dimension_weight=$request->dimension_weight;
        $vehicle->number_of_doors=$request->number_of_doors;
        $vehicle->lot_number=$request->lot_number;
        $vehicle->vehicle_price=$request->vehicle_price;
        $vehicle->price_status=$request->price_status;
        $vehicle->ground_clearance=$request->ground_clearance;
        $vehicle->seat_capacity=$request->seat_capacity;
        $vehicle->fuel_tank_capacity=$request->fuel_tank_capacity;
        $vehicle->kilometer_run=$request->kilometer_run;
        $vehicle->current_milage=$request->current_milage;
        $vehicle->vehicle_color=$request->vehicle_color;
        $vehicle->fuel_type=$request->fuel_type;
        $vehicle->engine=$request->engine;
        $vehicle->ac=($request->ac)?$request->ac:'no';
        $vehicle->driver_seat_adjustment=($request->driver_seat_adjustment)?$request->driver_seat_adjustment:'no';
        $vehicle->tax_status=$request->tax_status;
        $vehicle->documents=$request->documents;
        $vehicle->power_window= ($request->power_window==='yes')?$request->power_window:'no';
        $vehicle->power_steering= ($request->power_steering==='yes')?$request->power_steering:'no';
        $vehicle->central_lock= ($request->central_lock==='yes')?$request->central_lock:'no';
        $vehicle->keyless_remote_entry= ($request->keyless_remote_entry==='yes')?$request->keyless_remote_entry:'no';
        $vehicle->tubeless_tyres= ($request->tubeless_tyres==='yes')?$request->tubeless_tyres:'no';
        $vehicle->air_bags= ($request->air_bags==='yes')?$request->air_bags:'no';
        $vehicle->anti_lock_braking= ($request->anti_lock_braking==='yes')?$request->anti_lock_braking:'no';
        $vehicle->steering_mounted_controls= ($request->steering_mounted_controls==='yes')?$request->steering_mounted_controls:'no';
        $vehicle->electric_side_mirror= ($request->electric_side_mirror==='yes')?$request->electric_side_mirror:'no';
        $vehicle->child_safety_lock= ($request->child_safety_lock==='yes')?$request->child_safety_lock:'no';
        $vehicle->passenger_seat_adjustment= ($request->passenger_seat_adjustment==='yes')?$request->passenger_seat_adjustment:'no';
        //$vehicle->featured=$request->featured;
        $vehicle->user_id=Auth::user()->id;
        $vehicle->save();
        return redirect('/admin/vehicles/'.$vehicle->id.'/photos');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle=Vehicle::find($id);
        return view('admin.vehicle.showvehicle',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle=Vehicle::find($id);
        return view('admin.vehicle.editvehicle',compact('vehicle'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, $id)
    {
        $vehicle=Vehicle::find($id);
        $v=$request->validated();
        $vehicle->company_name=$request->company_name;
        $vehicle->model_name=$request->model_name;
        $vehicle->number=$request->number;
        $vehicle->purchased_date=$request->purchased_date;
        $vehicle->condition=$request->condition;
        $vehicle->dimension_weight=$request->dimension_weight;
        $vehicle->number_of_doors=$request->number_of_doors;
        $vehicle->lot_number=$request->lot_number;
        $vehicle->vehicle_price=$request->vehicle_price;
        $vehicle->price_status=$request->price_status;
        $vehicle->ground_clearance=$request->ground_clearance;
        $vehicle->seat_capacity=$request->seat_capacity;
        $vehicle->fuel_tank_capacity=$request->fuel_tank_capacity;
        $vehicle->kilometer_run=$request->kilometer_run;
        $vehicle->current_milage=$request->current_milage;
        $vehicle->vehicle_color=$request->vehicle_color;
        $vehicle->fuel_type=$request->fuel_type;
        $vehicle->engine=$request->engine;
        $vehicle->ac=($request->ac)?$request->ac:'no';
        $vehicle->driver_seat_adjustment=($request->driver_seat_adjustment)?$request->driver_seat_adjustment:'no';
        $vehicle->tax_status=$request->tax_status;
        $vehicle->documents=$request->documents;
        $vehicle->power_window= ($request->power_window==='yes')?$request->power_window:'no';
        $vehicle->power_steering= ($request->power_steering==='yes')?$request->power_steering:'no';
        $vehicle->central_lock= ($request->central_lock==='yes')?$request->central_lock:'no';
        $vehicle->keyless_remote_entry= ($request->keyless_remote_entry==='yes')?$request->keyless_remote_entry:'no';
        $vehicle->tubeless_tyres= ($request->tubeless_tyres==='yes')?$request->tubeless_tyres:'no';
        $vehicle->air_bags= ($request->air_bags==='yes')?$request->air_bags:'no';
        $vehicle->anti_lock_braking= ($request->anti_lock_braking==='yes')?$request->anti_lock_braking:'no';
        $vehicle->steering_mounted_controls= ($request->steering_mounted_controls==='yes')?$request->steering_mounted_controls:'no';
        $vehicle->electric_side_mirror= ($request->electric_side_mirror==='yes')?$request->electric_side_mirror:'no';
        $vehicle->child_safety_lock= ($request->child_safety_lock==='yes')?$request->child_safety_lock:'no';
        $vehicle->passenger_seat_adjustment= ($request->passenger_seat_adjustment==='yes')?$request->passenger_seat_adjustment:'no';
       // $vehicle->featured=$request->featured;
        $vehicle->user_id=Auth::user()->id;
        $vehicle->save();
        return redirect('/admin/vehicle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle=Vehicle::find($id);
        $vehicle->status="inactive";
        $vehicle->save();
         return redirect('/admin/vehicle');
    }

    public function viewPhotos($id)
    {
        $vehicles_id=$id;
        $images=VechileGallery::where('vehicles_id',$id)->get();
        return view('admin.vehicle.vehiclephoto',compact('vehicles_id','images'));
    }

    public function addPhotos(Request $request,$id)
    {
         $gallery=new VechileGallery;
         $image = $request->file('file');
            $filename = $image->store('photos');
            VechileGallery::create([
                            'vehicles_id'=>$id,
                            'photos'=>$filename
                        ]);
    }
    public function deletePhotos($vehicle,$id)
    {
        
      $photo=VechileGallery::all()->where('id',$id)->pluck('photos')->first();
      Storage::disk('public')->delete($photo);

      $deletedPhoto=VechileGallery::all()->where('id',$id)->first();
      $deletedPhoto->delete();
      return redirect('/admin/vehicles/' . $vehicle.'/photos');
    }
}
