@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
        
                 <a href="{{route('all.service')}}" class="btn btn-primary">All  Service</a>

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
       <form action="{{route('update.service',$service->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
       @csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Title</label>
                <input type="text" name="title"  class="form-control" value="{{$service->title}}">

            </div>
          </div>



          @php
          $category=DB::table('categories')->get();
          @endphp
                    <div class="col-md-6">
                     <div class="form-group">
                          <label> Category</label>
                          <select class="form-control" name="category_id" required="">
                          	<option value="">Select Category</option>
                            @foreach($category as $row)
                            
                             <option value="{{ $row->id }}" {{ $row->id == $service->category_id ? 'selected' : '' }}>{{ $row->name }}</option>
                            @endforeach
                          </select>

                      </div>
                    </div>

        @php
          $subcategory=DB::table('sub_categories')->get();
          @endphp
          <div class="col-md-6">
           <div class="form-group">
                <label>Subcategory</label>
                       <select class="form-control" name="subcategory_id" >
                	<option value="">Select Category</option>
                  @foreach($subcategory as $row)
                  
                   <option value="{{ $row->id }}" {{ $row->id == $service->subcategory_id ? 'selected' : '' }}>{{ $row->name }}</option>
                  @endforeach
                       </select>

            </div>
          </div>

           <div class="col-md-6">
           <div class="form-group">
                <label> Image </label>
                 <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

            </div>
             <img id="logo" src="{{asset('backend/service/'.$service->image) }}" width="50" height="50;" />
          </div>


          <div class="col-md-12">
           <div class="form-group">
                <label>Short Description</label>
                <textarea id="summernote" class="form-control" name="short">
                	{!!$service->short!!}
                </textarea>

            </div>
          </div>


          <div class="col-md-12">
           <div class="form-group">
                <label>Long Description </label>
               <textarea id="summernotetwo" class="form-control" name="desc">
               	{!!$service->desc!!}
               </textarea>

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
  </section>
  <!-- /.content -->

           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
               </script>

               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

               <script type="text/javascript">
                   $(document).ready(function() {
                        $('select[name="category_id"]').on('change', function(){
                            var category_id = $(this).val();
                            if(category_id) {
                              $.ajax({
                                  url: "{{  url('/get/category/') }}/"+category_id,
                                  type:"GET",
                                  dataType:"json",
                                  success:function(data) {
                                     var d =$('select[name="subcategory_id"]').empty();
                                        $.each(data, function(key, value){
                                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                                        });
                                  },
                                 
                              });
                            } else {
                                alert('danger');
                            }
                        });
                    });
               </script>

@endsection