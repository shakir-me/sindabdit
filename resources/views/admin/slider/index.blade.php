   @extends('admin.layout')

   @section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Youtube Link</th>
                    <th>Slider Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
              @foreach($slider as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->desc}}</td>
                    <td>{{$row->link}}</td>
                    <td>{{$row->video_link}}</td>
                    <td>
                    	<img id="logo" src="{{asset('backend/slider/'.$row->image) }}" width="50" height="50;" />
                    </td>
                   
                    <td>
                    	<a href="{{route('edit.slider',$row->id)}}" class="btn btn-info">Edit</a>
                    	<a href="{{route('delete.slider',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Youtube Link</th>
                    <th>Slider Image</th>
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