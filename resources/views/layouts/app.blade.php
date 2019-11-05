<!doctype html>
<html>
    <head>
    	<title>App Name - @yield('title')</title>
    </head>
    <body>
		@section('navbar') Navbar dari Layout
		<hr />
		@show
		
		<div class="container">
			@yield('content')
		</div>
    </body>
</html>
