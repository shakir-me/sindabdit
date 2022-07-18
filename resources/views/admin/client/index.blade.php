   @extends('admin.layout')

   @section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                 <a href="{{route('add.client')}}" class="btn btn-primary">Add Client</a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Client Category</th>
                    <th>Client Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
              @foreach($client as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->clientcategory->name}}</td>
               
                    <td>
                    	<img id="logo" src="{{asset('backend/client/'.$row->image) }}" width="50" height="50;" />
                    </td>
                   
                    <td>
                    	<a href="{{route('edit.client',$row->id)}}" class="btn btn-info">Edit</a>
                    	<a href="{{route('delete.client',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>Id</th>
                    <th>Client Category</th>
                    <th>Client Image</th>
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