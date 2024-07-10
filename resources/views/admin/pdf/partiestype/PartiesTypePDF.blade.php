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
		<tr>
			<td>Id</td>
			<td>Parties Type Name</td>
			<td>Created Date</td>
			<td>Update Date</td>
		</tr>

		@foreach($parties as $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->parties_type_name }}</td>
			<td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
			<td>{{ date('d-m-y', strtotime($value->updated_at)) }}</td>
		</tr>
		@endforeach

	</table>
	
</body>
</html>