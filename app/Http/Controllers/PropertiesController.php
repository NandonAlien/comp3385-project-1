<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\File;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function create(){
           
         return view('property-form');
    }

    public function properties(){

        $properties = Property::all();
        return view('properties',['properties'=>$properties]);
    }

    public function send(Request $request){

        $request->validate([
            'property-title'=>'required',
            'description'=>'required',
            'room-amt'=>'required',
            'bathroom-amt'=>'required',
            'price'=>'required',
            'property-type'=>'required',
            'location'=>'required',
            'photo'=>['required',File::types(['png','jpg','webp'])->min(1024)->max(12*1024)]

        ]);
        $property = new Property();
        $property -> title =$request->input('property-title');
        $property -> description = $request->input('description');
        $property -> roomAmt = $request->input('room-amt');
        $property -> bathroomAmt = $request ->input('bathroom-amt');
        $property->price=$request->input('price');
        $property->type=$request->input('property-type');
        $property->location=$request->input('location');
        $property->photoPath=$request->photo->path();
        $property->photoName=$request->photo->getClientOriginalName();
        $request->photo->storeAs('images',$request->photo->getClientOriginalName());
        return view('properties');
    }

    public function property($property_id){
        $product = Property::find($property_id);
        return view('property',['product'=>$product]);
    }
}
