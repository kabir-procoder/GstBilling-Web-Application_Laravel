<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>PDF Generate Parties Single</title>
</head>
<body>

	<h1>{{ $title }}</h1>
	<p>{{ $description }}</p>
	<p>{{ $issuedate }}</p>

	<div>
		<img src="https://www.w3schools.com/images/picture.jpg" alt="">
	</div>

	<table class="table table-bordered">
		<p>ID : - {{ $getSingleRecord->id }}</p>
		<p>Parties Type Name : - {{ !empty($getSingleRecord->get_parties_type_single->parties_type_name) ? $getSingleRecord->get_parties_type_single->parties_type_name : '' }}</p>
		<p>Full Name : - {{ $getSingleRecord->fullname }}</p>
		<p>Phone Number : - {{ $getSingleRecord->phone_no }}</p>
		<p>Address : - {{ $getSingleRecord->address }}</p>
		<p>Account Holder Name : - {{ $getSingleRecord->account_holder_name }}</p>
		<p>Account Number : - {{ $getSingleRecord->account_no }}</p>
		<p>Bank Name : - {{ $getSingleRecord->bank_name }}</p>
		<p>IFIC Code : - {{ $getSingleRecord->ifsc_code }}</p>
		<p>Branch Address : - {{ $getSingleRecord->branch_address }}</p>
		<p>Created Date : - {{ $getSingleRecord->created_at }}</p>
		<p>Update Date : - {{ $getSingleRecord->updated_at }}</p>
	</table>
	
</body>
</html>