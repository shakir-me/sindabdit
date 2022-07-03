@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Web Site Setting</h3>

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
       <form action="{{route('update.setting',$setting->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="number"  class="form-control" value="{{$setting->number}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"  class="form-control" value="{{$setting->email}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Link</label>
                <input type="text" name="link"  class="form-control" value="{{$setting->link}}">

            </div>
          </div>

      
            <div class="col-md-6">
           <div class="form-group">
                <label>Address One</label>
                <input type="text" name="address_one"  class="form-control"  value="{{$setting->address_one}}">

            </div>
          </div>

            <div class="col-md-6">
           <div class="form-group">
                <label>Address Two</label>
                <input type="text" name="address_two"  class="form-control" value="{{$setting->address_two}}">

            </div>
          </div>

            <div class="col-md-6">
           <div class="form-group">
                <label>Open Time </label>
                <input type="text" name="open_time"  class="form-control" value="{{$setting->open_time}}">

            </div>
          </div>

           <div class="col-md-6">
           <div class="form-group">
                <label>Desc  </label>
                <input type="text" name="desc"  class="form-control" value="{{$setting->desc}}">

            </div>
          </div>

           <div class="col-md-6">
           <div class="form-group">
                <label>Facebook Link  </label>
                <input type="text" name="facebook_link"  class="form-control" value="{{$setting->facebook_link}}">

            </div>
          </div>

           <div class="col-md-6">
           <div class="form-group">
                <label>Youtube Link  </label>
                <input type="text" name="youtube_link"  class="form-control" value="{{$setting->youtube_link}}">

            </div>
          </div>

           <div class="col-md-6">
           <div class="form-group">
                <label>Linkend Link  </label>
                <input type="text" name="linkend_link"  class="form-control" value="{{$setting->linkend_link}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Instraram Link  </label>
                <input type="text" name="instragram_link"  class="form-control" value="{{$setting->instragram_link}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Web Site Image </label>
                 <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

            </div>
              <img id="logo" src="{{asset('backend/setting/'.$setting->image) }}" width="50" height="50;" />
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
      <!-- /.card -->

   
      <!-- /.card -->

  
      <!-- /.card -->

     
      <!-- /.row -->
    
      <!-- /.row -->
   
      <!-- /.row -->
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