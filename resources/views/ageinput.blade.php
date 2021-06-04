<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form method="get" action="home" action="noaccess">
		<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
		<div class="row" style="margin-left: 100px; margin-top: 100px;">
			<div class="column"  >
				<input type="number" style="width: 250px;" name="age" placeholder="Enter your Age"></br>
			</div>
			
			<div class="column" style=" margin-top: 10px;">
				<input type="submit" name="submit" class="btn btn-success">
				
			</div>
		</div>
	</form>

</body>
</html>