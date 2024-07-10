@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parties Type List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Parties Type List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        {{-- Responsive Hover Table --}}
        @include('message')
        <div class="row">
          <div class="col-12">

          	<div class="card">
             <div class="card-header">
               <div class="card-title">Search Parties Type</div>
             </div>
             <form method="get" action="">
               <div class="card-body">
                 <div class="row">

                   <div class="form-group col-md-2">
                     <label>ID</label>
                     <input type="text" name="id" value="{{ Request()->id }}" class="form-control" placeholder="ID">
                   </div>

                   <div class="form-group col-md-4">
                     <label>Parties Name</label>
                     <input type="text" name="parties_type_name" value="{{ Request()->parties_type_name }}" class="form-control" placeholder="Parties Name">
                   </div>

                   <div class="form-group col-md-3">
                     <label>Create Date</label>
                     <input type="date" name="created_at" value="{{ Request()->created_at }}" class="form-control">
                   </div>

                   <div class="form-group col-md-3">
                     <label>Update Date</label>
                     <input type="date" name="updated_at" value="{{ Request()->updated_at }}" class="form-control">
                   </div>

                   <div style="clear: both;"></div>
                   <br>
                   <div class="col-md-12">
                     <button class="btn btn-primary" type="submit">Search</button>
                     <a href="{{ url('admin/parties_type') }}" class="btn btn-success">Reset</a>
                   </div>

                 </div>
               </div>
             </form> 
            </div>

            <div class="card">
              
              <div class="card-header bg-info">
                  <h3 class="card-title">Parties Type List</h3>
                  <a href="{{ url('admin/parties_type/add') }}" class="btn btn-primary float-right">Add</a>
                  <a href="{{ url('admin/parties_type/trashlist') }}" class="btn btn-warning text-white float-right mr-1">Trash</a>
                  <a href="{{ url('admin/parties_type/pdf_generator') }}" class="btn btn-dark text-white float-right mr-1">PDF Generator</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th style="text-wrap: nowrap;">ID</th>
                      <th style="text-wrap: nowrap;">Parties Type Name</th>
                      <th style="text-wrap: nowrap;">Create Date</th>
                      <th style="text-wrap: nowrap;">Update Date</th>
                      <th style="text-wrap: nowrap;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@forelse($getRecord as $value)
	                    <tr>
	                      <td style="text-wrap: nowrap;">{{ $value->id }}</td>
	                      <td style="text-wrap: nowrap;">{{ $value->parties_type_name }}</td>
                        <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                        <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->updated_at)) }}</td>
	                      <td style="text-wrap: nowrap;">
                          <a href="{{ url('admin/parties_type/pdf_single/'.$value->id) }}" class="btn btn-dark"><i class="fas fa-file-pdf"></i></a>
	                      	<a href="{{ url('admin/parties_type/edit/'.$value->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
	                      	<a href="{{ url('admin/parties_type/trash/'.$value->id) }}" onclick="return confirm('Are you sure you want to trash this item?');" class="btn btn-warning text-white"><i class="fas fa-trash-alt"></i></a>
	                      </td>
	                    </tr>
                      @empty
                      <tr>
                        <td colspan="100%" style="color: red;">Record Not Found!</td>
                      </tr>
	                @endforelse
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