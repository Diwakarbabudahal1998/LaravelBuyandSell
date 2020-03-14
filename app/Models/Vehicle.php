<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['company_name','model_name','dimension_weight','number',
    'purchased_date','condition','number_of_doors'.'lot_number','power_window','power_steering',
    'central_lock','keyless_remote_entry','vehicles_price','price_status','ground_clearance',
    'seat_capacity','fuel_tank_capacity','kilometer_run','current_milage','air_bags',
    'vehicle_color','fuel_type','engine','tax_status','documents','featured','tubeless_tyres',
    'anti_lock_braking','ac','steering_mounted_controls','electric_side_mirror','child_safety_lock',
    'driver_seat_adjustment','passenger_seat_adjustment'


];
}
