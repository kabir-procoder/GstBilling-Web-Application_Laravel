@extends('admin.layouts._app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GST Bills Trash-List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">GST Bills Trash-List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	<a href="{{ url('admin/gst_bills') }}" class="btn btn-primary" style="margin-bottom: 15px;">Go-Back</a>
        {{-- Responsive Hover Table --}}
        <div class="row">
          <div class="col-12">

          	@include('message')

            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Parties List Table</h3>
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
                  	@foreach($getRecord as $value)
	                    <tr>
	                      <td style="text-wrap: nowrap;">{{ $value->id }}</td>
	                      <td style="text-wrap: nowrap;">{{ $value->parties_type_name }}</td>
                        <td style="text-wrap: nowrap;">{{ $value->invoice_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $value->invoice_number }}</td>
                        <td style="text-wrap: nowrap;">{{ $value->item_description }}</td>
                        <td style="text-wrap: nowrap;">{{ $value->total_amount }}</td>
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
	                      	<a href="{{ url('admin/gst_bills/restore/'.$value->id) }}" onclick="return confirm('Are you sure you want to restore this item?');" class="btn btn-success"><i class="fas fa-trash-restore"></i></a>
	                      	<a href="{{ url('admin/gst_bills/delete/'.$value->id) }}" onclick="return confirm('Are you sure you want to parmanently delete this item?');" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
	                      </td>
	                    </tr>
	                  @endforeach
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