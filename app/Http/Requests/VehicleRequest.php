<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name'=>'required',
            'model_name'=>'required',
            'vehicle_price'=>'required',
            'purchased_date'=>'required',
            'ground_clearance'=>'required',
            'seat_capacity'=>'required',
            'fuel_tank_capacity'=>'required',
            'current_milage'=>'required',
            'vehicle_color'=>'required',
            'fuel_type'=>'required',
            'condition'=>'required',
            'kilometer_run'=>'required',
            'engine'=>'required',
            'number'=>'required',
            'dimension_weight'=>'required',
            'lot_number'=>'required',
            'price_status'=>'required',
            'tax_status'=>'required',
            'number_of_doors'=>'required',
            'documents'=>'required'
        ];
    }
}
