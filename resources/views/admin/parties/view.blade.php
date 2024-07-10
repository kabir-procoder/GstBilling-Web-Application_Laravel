@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-info mt-4">

                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->id }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parties Type Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ !empty($getRecord->get_parties_type_single->parties_type_name) ? $getRecord->get_parties_type_single->parties_type_name : '' }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Fullname <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->fullname }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->phone_no }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Address <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->address }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Account Holder Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->account_holder_name }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Account Number <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->account_no }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bank Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->bank_name }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IFSC Code <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->ifsc_code }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Branch Address <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ $getRecord->branch_address }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Created at <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ date('d-m-Y H:i A', strtotime($getRecord->created_at)) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Updated at <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      {{ date('d-m-Y H:i A', strtotime($getRecord->updated_at)) }}
                    </div>
                  </div>

                </div>



            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

  </div> <!--  -->

@endsection