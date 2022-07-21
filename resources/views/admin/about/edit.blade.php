@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
        
                 <a href="{{route('all.about')}}" class="btn btn-primary">All  About</a>

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
       <form action="{{route('update.about',$about->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
       @csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Title</label>
                <input type="text" name="title"  class="form-control" value="{{$about->title}}">

            </div>
          </div>



     


        

           <div class="col-md-6">
           <div class="form-group">
                <label> Image </label>
                 <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

            </div>
             <img id="logo" src="{{asset('backend/about/'.$about->image) }}" width="50" height="50;" />
          </div>


         


          <div class="col-md-12">
           <div class="form-group">
                <label> Description </label>
               <textarea id="summernotetwo" class="form-control" name="desc">
               	{!!$about->desc!!}
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

 

@endsection