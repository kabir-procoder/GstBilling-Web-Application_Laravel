<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>PDF Generate Gstbilling Single</title>
</head>
<body>

	<h1>{{ $title }}</h1>
	<h4>{{ $date }}</h4>
	<p>{{ $description }}</p>

	<table class="table table-bordered">
		<p>ID : - {{ $getSingleRecord->id }}</p>
		<p>Parties Type Name : - {{ !empty($getSingleRecord->getPartiesTypeName->parties_type_name) ? $getSingleRecord->getPartiesTypeName->parties_type_name : '' }}</p>
		<p>Invoice Date : - {{ $getSingleRecord->invoice_date }}</p>
		<p>Invoice Number : - {{ $getSingleRecord->invoice_number }}</p>
		<p>Item Description : - {{ $getSingleRecord->item_description }}</p>
		<p>Total Amount : - {{ $getSingleRecord->total_amount }}</p>
		<p>CGST Rate  : - {{ $getSingleRecord->cgst_rate }}</p>
		<p>Bank Name : - {{ $getSingleRecord->bank_name }}</p>
		<p>SGST Rate : - {{ $getSingleRecord->sgst_rate }}</p>
		<p>IGST Rate : - {{ $getSingleRecord->igst_rate }}</p>
		<p>CGST Amount : - {{ $getSingleRecord->cgst_ammount }}</p>
		<p>SGST Amount : - {{ $getSingleRecord->sgst_ammount }}</p>
		<p>IGST Amount : - {{ $getSingleRecord->igst_ammount }}</p>
		<p>Tax Amount : - {{ $getSingleRecord->tax_ammount }}</p>
		<p>Net Amount : - {{ $getSingleRecord->net_ammount }}</p>
		<p>Declaration : - {{ $getSingleRecord->declaration }}</p>
		<p>Created Date : - {{ date('d-m-y'), strtotime($getSingleRecord->created_at) }}</p>
		<p>Update Date : - {{ date('d-m-y'), strtotime($getSingleRecord->updated_at) }}</p>
	</table>
	
</body>
</html>