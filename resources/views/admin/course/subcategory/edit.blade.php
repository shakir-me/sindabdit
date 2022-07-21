@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
                      <a href="{{route('all.subcategory')}}" class="btn btn-primary">All Subcategory</a>


          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
       <form action="{{route('update.coursesubcategory',$subcategory->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Subcategory Name</label>
                <input type="text" name="name"  class="form-control" value="{{$subcategory->name}}" >

            </div>
          </div>
@php
$category=DB::table('course_categories')->get();
@endphp
          <div class="col-md-6">
           <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="course_category_id" required="">
                  @foreach($category as $row)
                 
                   <option value="{{ $row->id }}" {{ $row->id == $subcategory->course_category_id ? 'selected' : '' }}>{{ $row->name }}</option>
                  @endforeach
                </select>

            </div>
          </div>

  

        

      
           

            

          

     
      </div>

          <div class="form-group">
              
               <button type="submit" class="btn btn-primary" >Update</button>

           </div>




          <!-- /.row -->

        
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
       
      </div>
  </form>
    </div>
    <!-- /.container-fluid -->


@endsection