@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GST Bills Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">GST Bills Add</li>
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
                <h3 class="card-title">GST Bills Add</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/gst_bills/add') }}" method="post" enctype="multipart/form-data">

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
                    <label class="col-sm-2 col-form-label">Invoice Date <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="invoice_date" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Invoice Number <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter Invoice Number" name="invoice_number" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Item Description <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="item_description" rows="3" placeholder="Enter Item Description"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Total Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Total Amount Name" name="total_amount" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">CGST Rate <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter CGST Rate" name="cgst_rate" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bank Name <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Bank Name" name="bank_name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">SGST Rate <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter SGST Rate" name="sgst_rate" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IGST Rate <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter IGST Rate" name="igst_rate" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">CGST Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter CGST Amount" name="cgst_ammount" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">SGST Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter CGST Amount" name="sgst_ammount" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IGST Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter IGST Amount" name="igst_ammount" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tax Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter Tax Amount" name="tax_ammount" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Net Amount <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter Net Amount" name="net_ammount" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Declaration <span style="color: red;"> *</span></label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="declaration" rows="3" placeholder="Enter Declaration"></textarea>
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