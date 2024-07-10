<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>PDF Generate Parties Type</title>
</head>
<body>

	<h1>{{ $title }}</h1>
	<p>{{ $date }}</p>

	<p>I'm Professional Web Developer</p>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th style="text-wrap: nowrap;">Id</th>
	      <th style="text-wrap: nowrap;">Parties Type Name</th>
	      <th style="text-wrap: nowrap;">Invoice Date</th>
	      <th style="text-wrap: nowrap;">Invoice Number</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($getRecord as $value)
		    <tr>
		      <th style="text-wrap: nowrap;">{{ $value->id }}</th>
		      <td style="text-wrap: nowrap;">{{ $value->parties_type_name }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->invoice_date }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->invoice_number }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th style="text-wrap: nowrap;">Item Description</th>
	      <th style="text-wrap: nowrap;">Total Amount</th>
	      <th style="text-wrap: nowrap;">CGST Rate</th>
	      <th style="text-wrap: nowrap;">Bank Name</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($getRecord as $value)
		    <tr>
		      <td style="text-wrap: nowrap;">{{ $value->item_description }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->total_amount }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->cgst_rate }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->bank_name }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th style="text-wrap: nowrap;">SGST Rate</th>
	      <th style="text-wrap: nowrap;">IGST Rate</th>
	      <th style="text-wrap: nowrap;">CGST Ammount</th>
	      <th style="text-wrap: nowrap;">SGST Ammount</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($getRecord as $value)
		    <tr>
		      <td style="text-wrap: nowrap;">{{ $value->sgst_rate }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->igst_rate }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->cgst_ammount }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->sgst_ammount }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th style="text-wrap: nowrap;">IGST Ammount</th>
	      <th style="text-wrap: nowrap;">Tax Ammount</th>
	      <th style="text-wrap: nowrap;">Net Ammount</th>
	      <th style="text-wrap: nowrap;">Declaration</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($getRecord as $value)
		    <tr>
		      <td style="text-wrap: nowrap;">{{ $value->igst_ammount }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->tax_ammount }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->net_ammount }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->declaration }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>