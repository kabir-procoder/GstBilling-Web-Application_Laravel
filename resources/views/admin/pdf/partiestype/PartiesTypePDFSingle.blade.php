<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>PDF Generate Parties Type Single</title>
</head>
<body>

	<h1>{{ $title }}</h1>
	<p>{{ $description }}</p>
	<p>{{ $issuedate }}</p>

	<table class="table table-bordered">
		<p>ID : - {{ $getSingleRecord->id }}</p>
		<p>Parties Type Name : - {{ $getSingleRecord->parties_type_name }}</p>
		<p>Created Date : - {{ $getSingleRecord->created_at }}</p>
		<p>Update Date : - {{ $getSingleRecord->updated_at }}</p>
	</table>
	
</body>
</html>