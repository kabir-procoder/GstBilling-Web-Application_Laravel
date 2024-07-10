@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parties Type Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Parties Add</li>
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
                <h3 class="card-title">Parties Type Add</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/parties_type/insert') }}" method="post" enctype="multipart/form-data">

              	{{ csrf_field() }}

                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parties Type Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Parties Type Name" name="parties_type_name" required>
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