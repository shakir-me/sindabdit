@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Choose Us </h3>

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
       <form action="{{route('update.choose',$choose->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="title"  class="form-control" value="{{$choose->title}}">

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Description</label>
                <input type="text" name="desc"  class="form-control" value="{{$choose->desc}}">

            </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
                <label>Sl:one</label>
                <input type="text" name="sl_one"  class="form-control" value="{{$choose->sl_one}}">

            </div>
          </div>

      
            <div class="col-md-4">
           <div class="form-group">
                <label>SL:Title One</label>
                <input type="text" name="sl_one_title"  class="form-control"  value="{{$choose->sl_one_title}}">

            </div>
          </div>

            <div class="col-md-4">
           <div class="form-group">
                <label>Sl One Description</label>
                <input type="text" name="sl_one_desc"  class="form-control" value="{{$choose->sl_one_desc}}">

            </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
                <label>Sl:two</label>
                <input type="text" name="sl_two"  class="form-control" value="{{$choose->sl_two}}">

            </div>
          </div>

          
            <div class="col-md-4">
           <div class="form-group">
                <label>SL:Title Two</label>
                <input type="text" name="sl_two_title"  class="form-control"  value="{{$choose->sl_two_title}}">

            </div>
          </div>

            <div class="col-md-4">
           <div class="form-group">
                <label>Sl Two Description</label>
                <input type="text" name="sl_two_desc"  class="form-control" value="{{$choose->sl_two_desc}}">

            </div>
          </div>


          <div class="col-md-4">
           <div class="form-group">
                <label>Sl:Three</label>
                <input type="text" name="sl_three"  class="form-control" value="{{$choose->sl_three}}">

            </div>
          </div>

          
            <div class="col-md-4">
           <div class="form-group">
                <label>SL:Title Three</label>
                <input type="text" name="sl_three_title"  class="form-control"  value="{{$choose->sl_three_title}}">

            </div>
          </div>

            <div class="col-md-4">
           <div class="form-group">
                <label>Sl Three Description</label>
                <input type="text" name="sl_four_desc"  class="form-control" value="{{$choose->sl_four_desc}}">

            </div>
          </div>

           <!--  <div class="col-md-4">
           <div class="form-group">
                <label>Link</label>
                <input type="text" name="link"  class="form-control" value="{{$choose->link}}">

            </div>
          </div> -->

           

          

          

          


      

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

    

@endsection