@extends('admin.layout')

@section('content')



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
                      <a href="{{route('all.blog')}}" class="btn btn-primary">All Blog</a>


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
       <form action="{{route('update.blog',$blog->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                       	@csrf
        <div class="card-body">
          <div class="row">
           

          <div class="col-md-6">
           <div class="form-group">
                <label>Work Title</label>
                <input type="text" name="title"  class="form-control" value="{{$blog->title}}">

            </div>
          </div>
@php
$blog_category=DB::table('blog_categories')->get();
@endphp
          <div class="col-md-6">
           <div class="form-group">
                <label>Blog Category</label>
                <select class="form-control" name="blogcategory_id" required="">
                  @foreach($blog_category as $row)
               

                      <option value="{{ $row->id }}" {{ $row->id == $blog->blogcategory_id ? 'selected' : '' }}>{{ $row->name }}</option>
                  @endforeach
                </select>

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Shor Description</label>
                <textarea class="form-control" name="short" id="summernote">
                	{!!$blog->short!!}
                </textarea>

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Long Description</label>
                <textarea class="form-control" name="desc" id="summernotetwo">
                	{!!$blog->desc!!}
                </textarea>

            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
                <label>Slider Blog </label>
                <select class="form-control" name="slider_blog">

                	  <option value="1" {{($blog->slider_blog=="1")?"selected":""}}>Yes</option>
                	  <option value="1" {{($blog->slider_blog=="0")?"selected":""}}>No</option>
         
                </select>

            </div>
          </div>


        

      
           

            

          

          <div class="col-md-6">
           <div class="form-group">
                <label> Image </label>
                 <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

            </div>
             <img id="logo" src="{{asset('backend/blog/'.$blog->image) }}" width="50" height="50;" />
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