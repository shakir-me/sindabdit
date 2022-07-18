   @extends('admin.layout')

   @section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Client Review List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>start</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
              @foreach($review as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->start}}</td>
                    <td>{{$row->designation}}</td>
                    <td>
                    	<img id="logo" src="{{asset('backend/review/'.$row->image) }}" width="50" height="50;" />
                    </td>
                   
                    <td>
                    	<a href="{{route('edit.review',$row->id)}}" class="btn btn-info">Edit</a>
                    	<a href="{{route('delete.review',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>start</th>
                   <th>Designation</th>
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