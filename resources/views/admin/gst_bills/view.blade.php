@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GST Bills View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">GST Bills View</li>
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
                <h3 class="card-title">GST Bills View</h3>
              </div>

              <form class="form-horizontal">

                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Id <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->id }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Parties Type Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ !empty($getRecord->getPartiesTypeName->parties_type_name) ? $getRecord->getPartiesTypeName->parties_type_name : '' }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Invoice Date <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->invoice_date }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Invoice Number <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->invoice_number }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Item Description <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->item_description }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Total Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->total_amount }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">CGST Rate <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->cgst_rate }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Bank Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->bank_name }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">SGST Rate <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->sgst_rate }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">IGST Rate <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->igst_rate }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">CGST Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->cgst_ammount }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">SGST Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->sgst_ammount }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">IGST Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->igst_ammount }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tax Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->tax_ammount }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Net Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->net_ammount }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Declaration <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ $getRecord->declaration }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Created At <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ date('d-m-y H:s A', strtotime($getRecord->created_at)) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Updated At <span style="color: red;"> *</span></label>
                    <div class="col-sm-8">
                      {{ date('d-m-y H:s A', strtotime($getRecord->updated_at)) }}
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <a href="{{ url('admin/gst_bills') }}" class="btn btn-default float-right">Back</a>
                </div>
              </form>


            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

  </div> <!--  -->

@endsection