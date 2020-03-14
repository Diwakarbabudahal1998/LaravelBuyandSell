<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\Admin\Interfaces\RealestateRepositoryInterface;
use App\Models\Realestate;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RealestateRequest;
use Illuminate\Support\Facades\Storage;


class RealEstateController extends Controller
{
    public function __construct(RealestateRepositoryInterface $realestate)
    {
        $this->realestate = $realestate;
    }
    public function index()
    {
         return $this->realestate->viewrealestate();
         
    }

    public function create()
    {
        return view('admin.realestate.createrealestate');

    }
    public function viewPhotos($id)
    {
        $realestate_id=$id;
        $images=Gallery::where('realestate_id',$id)->get();
        return view('admin.realestate.photorealestate',compact('realestate_id','images'));
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
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RealestateRequest $request)
    {
        $realEstate=new Realestate;
        $validatedData = $request->validated();
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
                    $realEstate->status="active";
                    $realEstate->save();
             
                return redirect('admin/realestate/'.$realEstate->id.'/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */

    public function show(RealEstate $realEstate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function edit($realEstate)
    {
        $real=Realestate::find($realEstate);
       return view('admin.realestate.editrealestate',compact('real'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $real=Realestate::find($id);
        $real->property_name=$request->property_name;
        $real->property_price=$request->property_price;
        $real->property_status=$request->property_status;
        $real->price_status=$request->price_status;
        $real->address=$request->address;
        $real->city=$request->city;
        $real->district=$request->district;
        $real->country=$request->country;
        $real->province=$request->province;
        $real->ward_number=$request->ward_number;
        $real->house_number=$request->house_number;
        $real->zip_code=$request->zip_code;
        $real->property_area=$request->property_area;
        $real->number_of_bedrooms=$request->number_of_bedrooms;
        $real->number_of_bathrooms=$request->number_of_bathrooms;
        $real->number_of_floors=$request->number_of_floors;
        $real->building_age=$request->building_age;
        $real->gym= ($request->gym==='yes')?$request->gym:'no';
        $real->garden=($request->garden==='yes')?$request->garden:'no';
        $real->swimming_pool=($request->swimming_pool==='yes')?$request->swimming_pool:'no';
        $real->internet=($request->internet==='yes')?$request->internet:'no';
        $real->parking=($request->parking==='yes')?$request->parking:'no';
        $real->water=($request->water==='yes')?$request->water:'no';
        $real->school_college_nearby=($request->school_college_nearby==='yes')?$request->school_college_nearby:'no';
        $real->shopping_nearby=($request->shopping_nearby==='yes')?$request->shopping_nearby:'no';
        $real->bank_nearby=($request->bank_nearby==='yes')?$request->bank_nearby:'no';
        $real->pitched_road=($request->pitched_road==='yes')?$request->pitched_road:'no';
        $real->airport_nearby=($request->airport_nearby==='yes')?$request->airport_nearby:'no';
        $real->sewage=($request->sewage==='yes')?$request->sewage:'no';
        $real->alarm=($request->alarm==='yes')?$request->alarm:'no';
        $real->cctv=($request->cctv=='yes')?$request->cctv:'no';  
        $real->ac=($request->ac==='yes')?$request->ac:'no';
        $real->alarm=($request->alarm==='yes')?$request->alarm:'no';
        $real->user_id=Auth::user()->id;
        $real->description=$request->description;
        $real->save();
          return redirect('/admin/realestate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
     {
         $realestate=Realestate::find($id);
         $realestate->status="inactive";
         $realestate->save();
         return redirect('/admin/realestate');
     }
    public function deletePhotos($realestate,$id)
    {
        // return "hello";
      $photo=Gallery::all()->where('id',$id)->pluck('photos')->first();
      Storage::disk('public')->delete($photo);

      $deletedPhoto=Gallery::all()->where('id',$id)->first();
      $deletedPhoto->delete();
      return redirect('admin/realestate/' . $realestate.'/photos');
    }
}
