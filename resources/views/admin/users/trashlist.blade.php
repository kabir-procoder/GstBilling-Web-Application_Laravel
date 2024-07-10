@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Trash-List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">User Trash-List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <a href="{{ url('admin/users') }}" class="btn btn-primary" style="margin-bottom: 15px;">Go-Back</a>
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
                     <input type="text" name="id" value="{{ Request()->id }}" class="form-control" placeholder="User Id">
                   </div>

                   <div class="form-group col-md-4">
                     <label>User Name</label>
                     <input type="text" name="name" value="{{ Request()->name }}" class="form-control" placeholder="User Name">
                   </div>

                   <div class="form-group col-md-3">
                     <label>User Email</label>
                     <input type="email" name="email" value="{{ Request()->email }}" class="form-control" placeholder="User Email">
                   </div>

                   <div class="form-group col-md-3">
                     <label>Create Date</label>
                     <input type="date" name="created_at" value="{{ Request()->created_at }}" class="form-control">
                   </div>

                   <div style="clear: both;"></div>
                   <br>
                   <div class="col-md-12">
                     <button class="btn btn-primary" type="submit">Search</button>
                     <a href="{{ url('admin/users') }}" class="btn btn-success">Reset</a>
                   </div>

                 </div>
               </div>
             </form> 
            </div>

            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Parties Type List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th style="text-wrap: nowrap;">Id</th>
                      <th style="text-wrap: nowrap;">User Name</th>
                      <th style="text-wrap: nowrap;">User Email</th>
                      <th style="text-wrap: nowrap;">User Role</th>
                      <th style="text-wrap: nowrap;">Created Date</th>
                      <th style="text-wrap: nowrap;">Updated Date</th>
                      <th style="text-wrap: nowrap;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($getRecord as $value)
                      <tr>
                        <td style="text-wrap: nowrap;">{{ $value->id }}</td>
                        <td style="text-wrap: nowrap;">{{ $value->name }}</td>
                        <td style="text-wrap: nowrap;">{{ $value->email }}</td>
                        <td>
                          @if($value->is_role == 0) Subscriber
                            @elseif($value->is_role == 1) Admin
                          @endif
                        </td>
                        <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                        <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->updated_at)) }}</td>
                        <td style="text-wrap: nowrap;">
                          <a href="{{ url('admin/users/restore/'.$value->id) }}" onclick="return confirm('Are you sure you want to restore this item?');" class="btn btn-primary"><i class="fas fa-trash-restore"></i></a>
                          <a href="{{ url('admin/users/delete/'.$value->id) }}" onclick="return confirm('Are you sure you want to parmanent delete this item?');" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
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