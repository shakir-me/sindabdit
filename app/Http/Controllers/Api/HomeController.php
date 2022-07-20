<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Faciliti;
use App\Models\WorkCategory;
use App\Models\Team;
use App\Models\Review;
use App\Models\ClientCategory;
use DB;
class HomeController extends Controller
{
    public function setting()
    {
        $setting=DB::table('settings')->first();
        return response()->json($setting);
    }

    public function Slider(){
        $slider=Slider::all();
        return response()->json($slider);
    }

    public function Choose()
    {
        $choose=DB::table('chooses')->first();
        return response()->json($choose);
    }

    public function Category(){
        $category=Category::with(['service'])->get()->toArray();
    
        return response()->json($category);
    }


    public function Facilitie(){
        $facilitie=Faciliti::all();
        return response()->json($facilitie);
    }

    public function Work_Categories(){
        $work_category=WorkCategory::with(['work'])->get()->toArray();
        return response()->json($work_category);
    }

    public function Our_Team(){
        $our_team=Team::all();
        return response()->json($our_team);
    }


    public function Review(){
        $review=Review::all();
        return response()->json($review);
    }

    public function ClientCategory(){
        $ClientCategory=ClientCategory::with(['client'])->get()->toArray();
        return response()->json($ClientCategory);
    }


    public function ContactStore(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['msg']=$request->msg;
        DB::table('contacts')->insert($data);
        return response([
           'messege'=>"Contact Added Successfully"
        ],200);
    }


}

