   @extends('admin.layout')

   @section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                 <a href="{{route('add.blog')}}" class="btn btn-primary">Add Blog</a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Blog Category</th>
                    <th>Slider Blog</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
              @foreach($blog as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->blogcategory->name}}</td>
               
                    <td>
                    	<img id="logo" src="{{asset('backend/blog/'.$row->image) }}" width="50" height="50;" />
                    </td>
                   
                    <td>
                    	<a href="{{route('edit.blog',$row->id)}}" class="btn btn-info">Edit</a>
                    	<a href="{{route('delete.blog',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>Id</th>
                    <th>Title</th>
                    <th>blog Category</th>
                    <th>Slider Blog</th>
                    <th> Image</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    @endsection