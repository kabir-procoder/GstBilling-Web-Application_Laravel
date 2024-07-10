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
	      <th style="text-wrap: nowrap;">Full Name</th>
	      <th style="text-wrap: nowrap;">Phone Number</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($parties as $value)
		    <tr>
		      <th style="text-wrap: nowrap;">{{ $value->id }}</th>
		      <td style="text-wrap: nowrap;">{{ $value->parties_type_name }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->fullname }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->phone_no }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th style="text-wrap: nowrap;">Address</th>
	      <th style="text-wrap: nowrap;">Account Holder Name</th>
	      <th style="text-wrap: nowrap;">Account Number</th>
	      <th style="text-wrap: nowrap;">Bank Name</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($parties as $value)
		    <tr>
		      <td style="text-wrap: nowrap;">{{ $value->address }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->account_holder_name }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->account_no }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->bank_name }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th style="text-wrap: nowrap;">Ifsc Code</th>
	      <th style="text-wrap: nowrap;">Branch Address</th>
	      <th style="text-wrap: nowrap;">Created Date</th>
	      <th style="text-wrap: nowrap;">Update Date</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($parties as $value)
		    <tr>
		      <td style="text-wrap: nowrap;">{{ $value->ifsc_code }}</td>
		      <td style="text-wrap: nowrap;">{{ $value->branch_address }}</td>
		      <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->created_at)) }}</td>
		      <td style="text-wrap: nowrap;">{{ date('d-m-y', strtotime($value->updated_at)) }}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>