@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">User Edit</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/users/edit/'.@$getRecord->id) }}" method="post" enctype="multipart/form-data">

              	{{ csrf_field() }}

                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username<span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{ @$getRecord->name }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User Email<span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" value="{{ @$getRecord->email }}">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                      <label class="col-sm-2 col-form-label">Role<span style="color: red;">*</span></label>
                      <div class="col-sm-10">
                        <select class="form-control" name="is_role">
                          <option {{ $getRecord->is_role == 0 ? 'selected' : '' }} value="0">Subscriber</option>
                          <option {{ $getRecord->is_role == 1 ? 'selected' : '' }} value="1">Admin</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row mb-4">
                      <label class="col-sm-2 col-form-label">Password<span style="color: red;">*</span></label>
                      <div class="col-sm-10">
                        <input type="password" name="password" class="form-control">
                        <p style="color: orange; font-size: 14px;">(Leave blank if you are not changing the password)</p>
                        <span style="color: red;">{{ $errors->first('supplier_name') }}</span>
                      </div>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
              </form>


            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

  </div> <!--  -->

@endsection