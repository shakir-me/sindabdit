<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Image;
class ClientController extends Controller
{
        public function all()
        {
            $client=Client::all();
            return view('admin.client.index',compact('client'));
        }
                public function add()
                {

                    
                    return view('admin.client.add');
                }

                public function store(Request $request)
                {
                    
                      $client = new Client();
                      $client->client_category_id=$request->client_category_id;
                      $client->title=$request->title;
                      $client->desc=$request->desc;
                      $client->link=$request->link;
              
                      if ($request->image > 0) {
                       $image = $request->file('image');
                       $img = time() . '.'. $image->getClientOriginalExtension();
                       $location = public_path('backend/client/' .$img);
                       Image::make($image)->save($location);
                       $client->image = $img;
                      }
           


                       



                      $client->save();
                        if ($client) {           
                        $notification=array(
                          'messege'=>'Client Added Successfully',
                          'alert-type'=>'success'
                           );
                         return Redirect()->back()->with($notification);
                   }
                }

                public function edit($id)
                {
                     $client= Client::find($id);
                     return view('admin.client.edit',compact('client'));

                }


                public function update(Request $request,$id)
                { 

                 $client= Client::find($id);
                 $client->client_category_id=$request->client_category_id;
                 $client->title=$request->title;
                 $client->desc=$request->desc;
                 $client->link=$request->link;

                 if ($request->image > 0) {
                  $image = $request->file('image');
                  $img = time() . '.'. $image->getClientOriginalExtension();
                  $location = public_path('backend/client/' .$img);
                  Image::make($image)->save($location);
                  $client->image = $img;
                 }

                  


                      $client->save();
                        if ($client) {           
                        $notification=array(
                          'messege'=>'Client Update Successfully',
                          'alert-type'=>'success'
                           );
                         return Redirect()->route('all.client')->with($notification);
                   }
                }

                public function delete($id)
                {
                  $delete = Client::find($id);
                  $delete->delete();
                   $notification=array(
                        'messege'=>'Client Deleted Successfully',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
                }
}
