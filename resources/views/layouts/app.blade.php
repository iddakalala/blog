<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<a class="navbar-brand" href="/">Blog</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/posts">Posts</a>
				</li>
				<li>
					<a href="/about">About</a>
				</li>
				<li>
					<a href="/contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	@yield('content')

</body>
</html>	