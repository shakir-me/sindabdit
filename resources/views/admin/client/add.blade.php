@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
                      <a href="{{route('all.client')}}" class="btn btn-primary">All Work</a>


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
       <form action="{{route('store.client')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

         <!--  <div class="col-md-6">
           <div class="form-group">
                <label>Work Title</label>
                <input type="text" name="title"  class="form-control" >

            </div>
          </div> -->
@php
$client_category=DB::table('client_categories')->get();
@endphp
          <div class="col-md-6">
           <div class="form-group">
                <label>Work Category</label>
                <select class="form-control" name="client_category_id" required="">
                  @foreach($client_category as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
                </select>

            </div>
          </div>

          <!-- <div class="col-md-6">
           <div class="form-group">
                <label>Description</label>
                <input type="text" name="desc"  class="form-control" >

            </div>
          </div> -->

        

      
           

            

          

          <div class="col-md-6">
           <div class="form-group">
                <label>Image </label>
                 <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

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