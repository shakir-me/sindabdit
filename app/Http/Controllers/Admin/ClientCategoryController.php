<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientCategory;
class ClientCategoryController extends Controller
{
    public function all()
            {
                $clientcategory=ClientCategory::all();
                return view('admin.clientcategory.index',compact('clientcategory'));
            }
            public function add()
            {

                
                return view('admin.clientcategory.add');
            }

            public function store(Request $request)
            {
                
                  $clientcategory = new ClientCategory();
                  $clientcategory->name=$request->name;
                  $clientcategory->save();
                    if ($clientcategory) {           
                    $notification=array(
                      'messege'=>'ClientCategory  Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $clientcategory= ClientCategory::find($id);
                 return view('admin.clientcategory.edit',compact('clientcategory'));

            }


            public function update(Request $request,$id)
            { 

            $clientcategory= ClientCategory::find($id);
            $clientcategory->name=$request->name;
              
           $clientcategory->save();
            if ($clientcategory) {           
            $notification=array(
              'messege'=>'CLient ClientCategory Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.clientcategory')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = ClientCategory::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'ClientCategory Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}
