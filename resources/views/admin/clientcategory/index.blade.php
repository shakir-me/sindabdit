   @extends('admin.layout')

   @section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
               
                <a href="{{url('add/clientcategory')}}" class="btn btn-primary">Add Client Category</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
              @foreach($clientcategory as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->name}}</td>
                    <td>
                    	<a href="{{route('edit.clientcategory',$row->id)}}" class="btn btn-info">Edit</a>
                    	<a href="{{route('delete.clientcategory',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>Id</th>
                   <th>Name</th>
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