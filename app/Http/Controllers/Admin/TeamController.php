<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Image;
class TeamController extends Controller
{
    public function all()
        	{
        		$team=Team::all();
        		return view('admin.team.index',compact('team'));
        	}
            public function add()
            {

            	
            	return view('admin.team.add');
            }

            public function store(Request $request)
            {
            	
                  $team = new Team();
                  $team->name=$request->name;
                  $team->email=$request->email;
                  $team->phone=$request->phone;
                  $team->designation=$request->designation;
                  if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/team/' .$img);
                   Image::make($image)->save($location);
                   $team->image = $img;
                  }
       


                   



                  $team->save();
                    if ($team) {           
                    $notification=array(
                      'messege'=>'Team Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $team= Team::find($id);
                 return view('admin.team.edit',compact('team'));

            }


            public function update(Request $request,$id)
            { 

            $team= Team::find($id);
            $team->name=$request->name;
            $team->email=$request->email;
            $team->phone=$request->phone;
            $team->designation=$request->designation;

             if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/team/' .$img);
              Image::make($image)->save($location);
              $team->image = $img;
             }

              


                  $team->save();
                    if ($team) {           
                    $notification=array(
                      'messege'=>'Team Update Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->route('all.team')->with($notification);
               }
            }

            public function delete($id)
            {
              $delete = Team::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Team Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}
