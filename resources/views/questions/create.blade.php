

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<h1>Ask a Question</h1>
		<hr />
	
		<form action="{{ route('questions.store') }}" method="post">			
			{{csrf_field()}}
			
			<label for="title">Question</label>
			<input type="text" name="title" id="title" class="form-control">

			<label for="description">More Information:</label>
			<textarea name="description" id="description" rows="4" class="form-control"></textarea>

			<input type="submit" value="Submit Question" class="btn btn-primary block">
		
		</form>

	</div>   
    
</body>

</html>
