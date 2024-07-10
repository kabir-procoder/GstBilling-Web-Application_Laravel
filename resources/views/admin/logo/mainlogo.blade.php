@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Main Logo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Main Logo</li>
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
                <h3 class="card-title">Main Logo</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/logo/mainlogo') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Main Logo <span style="color: red;"> *</span></label>
                    <div class="custom-file col-sm-10">
                        <input type="file" class="custom-file-input" name="mainlogo">
                        <label class="custom-file-label">Choose file</label>
                        @if($getRecord[0]->image)
                          <img width="100" height="60" style="object-fit: cover; background: #8A8A8A; margin-top: 5px;" src="{{ url('public/images/mainlogo/'.$getRecord[0]->image) }}">
                        @endif
                    </div>
                  </div>
                </div>

                <input type="hidden" name="id" value="{{ @$getRecord[0]->id ? $getRecord[0]->id : '' }}">

                <div class="card-footer">
                  <button type="submit" name="add_to_update" class="btn btn-primary" value="{{ @count($getRecord)>0 ? 'Update' : 'Add' }}"> {{ @count($getRecord)>0 ? 'Update' : 'Add' }} </button>
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