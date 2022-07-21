   @extends('admin.layout')

   @section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
             

                  <a href="{{route('add.service')}}" class="btn btn-primary">Add  Service</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
              @foreach($service as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->category->name}}</td>
                    <td>{{$row->subcategory->name}}</td>
                    <td>{{$row->title}}</td>
                            <td>
                    	<img id="logo" src="{{asset('backend/service/'.$row->image) }}" width="50" height="50;" />
                    </td>
                            
                    <td>
                    	<a href="{{route('edit.service',$row->id)}}" class="btn btn-info">Edit</a>
                    	<a href="{{route('delete.service',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Title</th>
                    <th>Image</th>
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