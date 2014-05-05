<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style type="text/css">
	body{
		padding-top: 20px;
	}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Design Patterns</h1>
				<ul class="list-unstyled well">
					@foreach($routes as $route)
						<li> <a href="{{ $route->getUri() }}">{{ $route->getUri() }}</a> </li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

</body>
</html>
