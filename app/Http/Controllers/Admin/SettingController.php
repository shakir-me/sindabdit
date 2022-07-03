<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Choose;
use Image;
use DB;
class SettingController extends Controller
{
    public function Setting()
      {
      	$setting=DB::table('settings')->first();
      	return view('admin.website.setting',compact('setting'));
      }

      public function Update(Request $request,$id)
         {
         	 $setting =Setting::find($id);
         	 $setting->email=$request->email;
         	 $setting->number =$request->number;
         	 $setting->link =$request->link;
         	 $setting->address_one =$request->address_one;
         	 $setting->address_two =$request->address_two;
         	 $setting->open_time =$request->open_time;
         	 $setting->desc =$request->desc;
         	 $setting->facebook_link =$request->facebook_link;
         	 $setting->youtube_link =$request->youtube_link;
         	 $setting->linkend_link =$request->linkend_link;
         	 $setting->instragram_link =$request->instragram_link;

         	//  if($request->hasfile('image'))
 	        // {
 	        //     $file = $request->file('image');
 	        //     $extenstion = $file->getClientOriginalExtension();
 	        //     $filename = time().'.'.$extenstion;
 	        //     $file->move('admin/website/setting/', $filename);
 	        //     $setting->image = $filename;
 	        // }

         	 if ($request->image > 0) {
         	  $image = $request->file('image');
         	  $img = time() . '.'. $image->getClientOriginalExtension();
         	  $location = public_path('backend/setting/' .$img);
         	  Image::make($image)->save($location);
         	  $setting->image = $img;
         	 }

         	 $setting->save();
         	     if ($setting) {           
         	     $notification=array(
         	       'messege'=>'Setting Updated Successfully',
         	       'alert-type'=>'success'
         	        );
         	      return Redirect()->back()->with($notification);
         	}

         }


         public function ChooseUs()
           {
            $choose=DB::table('chooses')->first();
            return view('admin.website.choose',compact('choose'));
           }

            public function ChooseUpdate(Request $request,$id)
         {
             $choose =Choose::find($id);
             $choose->title=$request->title;
             $choose->desc =$request->desc;
             $choose->sl_one =$request->sl_one;
             $choose->sl_one_title =$request->sl_one_title;
             $choose->sl_one_desc =$request->sl_one_desc;
             $choose->sl_two =$request->sl_two;
             $choose->sl_two_title =$request->sl_two_title;
             $choose->sl_two_desc =$request->sl_two_desc;
             $choose->sl_three =$request->sl_three;
             $choose->sl_three_title =$request->sl_three_title;
             $choose->sl_four_desc =$request->sl_four_desc;
             $choose->link =$request->link;

          

             $choose->save();
                 if ($choose) {           
                 $notification=array(
                   'messege'=>'Choose Us Updated Successfully',
                   'alert-type'=>'success'
                    );
                  return Redirect()->back()->with($notification);
            }

         }


}
