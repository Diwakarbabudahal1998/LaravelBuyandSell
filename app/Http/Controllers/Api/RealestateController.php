<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RealestateRequest;
use App\Models\Realestate;
use App\Http\Resources\Realestate\RealestateResource;
use App\Http\Resources\Realestate\RealestateCollection;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
    


class RealestateController extends Controller
{
    public function __construct(){

        $this->middleware('auth:api')->except('index','show');
    }
    public function index()
    {
        $p=Realestate::all();
        return response(RealestateCollection::collection($p));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function viewPhotos($id)
    {
        $realestate_id=$id;
        $images=Gallery::where('realestate_id',$id)->get();
        return response([
            'status'=>'ok',
            'data'=>$images
        ],200);
     
    }
    public function addPhotos(Request $request,$id)
    {
         $gallery=new Gallery;
         $image = $request->file('file');
            $filename = $image->store('photos');
            Gallery::create([
                            'realestate_id'=>$id,
                            'photos'=>$filename
                        ]);
            return response([
                'success'=>'ok',
                'message'=>'photos submitted successfully'
            ],200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    $realEstate=new Realestate;
                    $realEstate->property_name=$request->property_name;
                    $realEstate->property_status=$request->property_status;
                    $realEstate->property_price=$request->property_price;
                    $realEstate->price_status=$request->price_status;
                    $realEstate->address=$request->address;
                    $realEstate->city=$request->city;
                    $realEstate->district=$request->district;
                    $realEstate->country=$request->country;
                    $realEstate->province=$request->province;
                    $realEstate->ward_number=$request->ward_number;
                    $realEstate->house_number=$request->house_number;
                    $realEstate->zip_code=$request->zip_code;
                    $realEstate->property_area=$request->property_area;
                    $realEstate->number_of_bedrooms=$request->number_of_bedrooms;
                    $realEstate->number_of_bathrooms=$request->number_of_bathrooms;
                    $realEstate->number_of_floors=$request->number_of_floors;
                    $realEstate->building_age=$request->building_age;
                    $realEstate->gym= ($request->gym==='yes')?$request->gym:'no';
                    $realEstate->garden=($request->garden==='yes')?$request->garden:'no';
                    $realEstate->swimming_pool=($request->swimming_pool==='yes')?$request->swimming_pool:'no';
                    $realEstate->internet=($request->internet==='yes')?$request->internet:'no';
                    $realEstate->parking=($request->parking==='yes')?$request->parking:'no';
                    $realEstate->water=($request->water==='yes')?$request->water:'no';
                    $realEstate->school_college_nearby=($request->school_college_nearby==='yes')?$request->school_college_nearby:'no';
                    $realEstate->shopping_nearby=($request->shopping_nearby==='yes')?$request->shopping_nearby:'no';
                    $realEstate->bank_nearby=($request->bank_nearby==='yes')?$request->bank_nearby:'no';
                    $realEstate->pitched_road=($request->pitched_road==='yes')?$request->pitched_road:'no';
                    $realEstate->airport_nearby=($request->airport_nearb==='yes')?$request->airport_nearby:'no';
                    $realEstate->sewage=($request->sewage==='yes')?$request->sewage:'no';
                    $realEstate->alarm=($request->alarm==='yes')?$request->alarm:'no';
                    $realEstate->cctv=($request->cctv=='yes')?$request->cctv:'no';  
                    $realEstate->ac=($request->ac==='yes')?$request->ac:'no';
                    $realEstate->alarm=($request->alarm==='yes')?$request->alarm:'no';
                    $realEstate->user_id=Auth::user()->id;
                    $realEstate->featured=($request->featured==='yes')?$request->featured:'no';
                    $realEstate->description=$request->description;
                    $realEstate->save();
                return response([
                    'success'=>'true',
                    'message'=>'data submitted successfully',
                    
                ]);
    }

    public function show(Realestate $realestate)
    {
        
        return new RealestateResource($realestate);
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        $realEstate=Realestate::find($id);
        $realEstate->property_name=$request->property_name;
        $realEstate->property_status=$request->property_status;
        $realEstate->property_price=$request->property_price;
        $realEstate->price_status=$request->price_status;
        $realEstate->address=$request->address;
        $realEstate->city=$request->city;
        $realEstate->district=$request->district;
        $realEstate->country=$request->country;
        $realEstate->province=$request->province;
        $realEstate->ward_number=$request->ward_number;
        $realEstate->house_number=$request->house_number;
        $realEstate->zip_code=$request->zip_code;
        $realEstate->property_area=$request->property_area;
        $realEstate->number_of_bedrooms=$request->number_of_bedrooms;
        $realEstate->number_of_bathrooms=$request->number_of_bathrooms;
        $realEstate->number_of_floors=$request->number_of_floors;
        $realEstate->building_age=$request->building_age;
        $realEstate->gym= ($request->gym==='yes')?$request->gym:'no';
        $realEstate->garden=($request->garden==='yes')?$request->garden:'no';
        $realEstate->swimming_pool=($request->swimming_pool==='yes')?$request->swimming_pool:'no';
        $realEstate->internet=($request->internet==='yes')?$request->internet:'no';
        $realEstate->parking=($request->parking==='yes')?$request->parking:'no';
        $realEstate->water=($request->water==='yes')?$request->water:'no';
        $realEstate->school_college_nearby=($request->school_college_nearby==='yes')?$request->school_college_nearby:'no';
        $realEstate->shopping_nearby=($request->shopping_nearby==='yes')?$request->shopping_nearby:'no';
        $realEstate->bank_nearby=($request->bank_nearby==='yes')?$request->bank_nearby:'no';
        $realEstate->pitched_road=($request->pitched_road==='yes')?$request->pitched_road:'no';
        $realEstate->airport_nearby=($request->airport_nearb==='yes')?$request->airport_nearby:'no';
        $realEstate->sewage=($request->sewage==='yes')?$request->sewage:'no';
        $realEstate->alarm=($request->alarm==='yes')?$request->alarm:'no';
        $realEstate->cctv=($request->cctv=='yes')?$request->cctv:'no';  
        $realEstate->ac=($request->ac==='yes')?$request->ac:'no';
        $realEstate->alarm=($request->alarm==='yes')?$request->alarm:'no';
        $realEstate->user_id=Auth::user()->id;
        $realEstate->featured=($request->featured==='yes')?$request->featured:'no';
        $realEstate->description=$request->description;
        $realEstate->save();
    return response([
        'success'=>'true',
        'message'=>'data submitted successfully',
        
    ]);
    }

   
    public function destroy($id)
    {
        //
    }

    public function deletePhotos($realestate,$id)
    {
      $photo=Gallery::all()->where('id',$id)->pluck('photos')->first();
      Storage::disk('public')->delete($photo);

      $deletedPhoto=Gallery::all()->where('id',$id)->first();
      $deletedPhoto->delete();
    return response([
        'status'=>'ok',
        'message'=>'data deleted successfully'
    ]);    }
}
