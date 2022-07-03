@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Our Team</h3>

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
       <form action="{{route('update.team',$team->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Name</label>
                <input type="text" name="name"  class="form-control" value="{{$team->name}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"  class="form-control" value="{{$team->email}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone"  class="form-control" name="phone" value="{{$team->phone}}">

            </div>
          </div>

      
            <div class="col-md-6">
           <div class="form-group">
                <label>Designation</label>
                <input type="text" name="designation"  class="form-control"  value="{{$team->designation}}">

            </div>
          </div>

            

          

          <div class="col-md-6">
           <div class="form-group">
                <label>Team Image </label>
                 <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

            </div>
             <img id="logo" src="{{asset('backend/team/'.$team->image) }}" width="50" height="50;" />
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