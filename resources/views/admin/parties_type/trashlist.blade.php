@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parties Type Trash-List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Parties Type Trash-List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	<a href="{{ url('admin/parties_type') }}" class="btn btn-primary" style="margin-bottom: 15px;">Go-Back</a>
        {{-- Responsive Hover Table --}}
        <div class="row">
          <div class="col-12">

          	@include('message')

            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Responsive Hover Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Parties Type Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($getRecord as $value)
	                    <tr>
	                      <td style="text-wrap: nowrap;">{{ $value->id }}</td>
	                      <td style="text-wrap: nowrap;">{{ $value->parties_type_name }}</td>
	                      <td style="text-wrap: nowrap;">
	                      	<a href="{{ url('admin/parties_type/restore/'.$value->id) }}" onclick="return confirm('Are you sure you want to restore this item?');" class="btn btn-success"><i class="fas fa-trash-restore"></i></a>
	                      	<a href="{{ url('admin/parties_type/delete/'.$value->id) }}" onclick="return confirm('Are you sure you want to parmanent delete this item?');" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
	                      </td>
	                    </tr>
	                @endforeach
                  </tbody>
                </table>

                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>



      </div><!-- /.container-fluid -->
    </section>




  </div> <!--  -->

@endsection