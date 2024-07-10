@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GST Bills List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">GST Bills List</li>
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
               <div class="card-title">Search GST Bills</div>
             </div>
             <form method="get" action="">
               <div class="card-body">
                 <div class="row">

                   <div class="form-group col-md-2">
                     <label>ID</label>
                     <input type="text" name="id" value="{{ Request()->id }}" class="form-control" placeholder="ID">
                   </div>

                   <div class="form-group col-md-3">
                     <label>Parties Name</label>
                     <input type="text" name="parties_type_name" value="{{ Request()->parties_type_name }}" class="form-control" placeholder="Parties Name">
                   </div>

                   <div class="form-group col-md-3">
                     <label>Invoice Date</label>
                     <input type="date" name="invoice_date" value="{{ Request()->invoice_date }}" class="form-control" placeholder="Invoice Date">
                   </div>

                   <div class="form-group col-md-2">
                     <label>Invoice Number</label>
                     <input type="number" name="invoice_number" value="{{ Request()->invoice_number }}" class="form-control" placeholder="Invoice Number">
                   </div>

                   <div class="form-group col-md-2">
                     <label>Total Amount</label>
                     <input type="number" name="total_amount" value="{{ Request()->total_amount }}" class="form-control" placeholder="Total Amount">
                   </div>


                   <div style="clear: both;"></div>
                   <br>
                   <div class="col-md-12">
                     <button class="btn btn-primary" type="submit">Search</button>
                     <a href="{{ url('admin/gst_bills') }}" class="btn btn-success">Reset</a>
                   </div>

                 </div>
               </div>
             </form> 
            </div>

          	

            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Parties List Table</h3>
                <a href="{{ url('admin/gst_bills/add') }}" class="btn btn-primary float-right">Add</a>
                <a href="{{ url('admin/gst_bills/trashlist') }}" class="btn btn-warning text-white float-right mr-1">Trash</a>
                <a href="{{ url('admin/gst_bills/pdf_generator') }}" class="btn btn-dark text-white float-right mr-1">Download PDF</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th style="text-wrap: nowrap;">ID</th>
                      <th style="text-wrap: nowrap;">Parties Type name</th>
                      <th style="text-wrap: nowrap;">Invoice Date</th>
                      <th style="text-wrap: nowrap;">Invoice Number</th>
                      <th style="text-wrap: nowrap;">Item Description</th>
                      <th style="text-wrap: nowrap;">Total Amount</th>
                      <th style="text-wrap: nowrap;">CGST Rate</th>
                      <th style="text-wrap: nowrap;">Bank Name</th>
                      <th style="text-wrap: nowrap;">SGST Rate</th>
                      <th style="text-wrap: nowrap;">IGST Rate</th>
                      <th style="text-wrap: nowrap;">CGST Amount</th>
                      <th style="text-wrap: nowrap;">SGST Amount</th>
                      <th style="text-wrap: nowrap;">IGST Amount</th>
                      <th style="text-wrap: nowrap;">Tax Amount</th>
                      <th style="text-wrap: nowrap;">Net Amount</th>
                      <th style="text-wrap: nowrap;">Declaration</th>
                      <th style="text-wrap: nowrap;">Issue Date</th>
                      <th style="text-wrap: nowrap;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@forelse($getRecord as $value)
	                    <tr>
	                       <td style="text-wrap: nowrap;">{{ $value->id }}</td>
	                       <td style="text-wrap: nowrap;">{{ $value->parties_type_name }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->invoice_date }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->invoice_number }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->item_description }}</td>
                          <td style="text-wrap: nowrap;">BDT. {{ $value->total_amount }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->cgst_rate }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->bank_name }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->sgst_rate }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->igst_rate }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->cgst_ammount }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->sgst_ammount }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->igst_ammount }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->tax_ammount }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->net_ammount }}</td>
                          <td style="text-wrap: nowrap;">{{ $value->declaration }}</td>
                          <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->created_at)) }}</td>
	                        <td style="text-wrap: nowrap;">
                          <a href="{{ url('admin/gst_bills/view/'.$value->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="{{ url('admin/gst_bills/pdf_single/'.$value->id) }}" class="btn btn-dark"><i class="fas fa-file-pdf"></i></a>
	                      	<a href="{{ url('admin/gst_bills/edit/'.$value->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
	                      	<a href="{{ url('admin/gst_bills/trash/'.$value->id) }}" onclick="return confirm('Are you sure you want to trash this item?');" class="btn btn-warning text-white"><i class="fas fa-trash-alt"></i></a>
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