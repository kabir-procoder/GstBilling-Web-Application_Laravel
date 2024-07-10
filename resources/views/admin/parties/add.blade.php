@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parties Add</h1>
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
                <h3 class="card-title">Parties Add</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/parties/add') }}" method="post" enctype="multipart/form-data">

              	{{ csrf_field() }}

                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Parties Type Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <select name="parties_type_id" class="form-control" required>
                        <option value="">Select Parties Type Name</option>
                          @foreach($getRecord as $value)
                            <option value="{{ $value->id }}">{{ $value->parties_type_name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Fullname <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone_no" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Address <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Address" name="address" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Account Holder Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Account Holder Name" name="  account_holder_name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Account Number <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter Account Number" name="    account_no" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bank Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Bank Name" name="bank_name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IFSC Code <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter Ifsc Code" name="ifsc_code" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Branch Address <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Branch Address" name="branch_address" required>
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