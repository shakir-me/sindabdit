@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
                      <a href="{{route('all.coursesubcategory')}}" class="btn btn-primary">All Subcategory</a>


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
       <form action="{{route('store.coursesubcategory')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Subcategory Name</label>
                <input type="text" name="name"  class="form-control" >

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
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
                </select>

            </div>
          </div>

  

        

      
           

            

          

     
      </div>

          <div class="form-group">
              
               <button type="submit" class="btn btn-primary" >Submit</button>

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

            <script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection