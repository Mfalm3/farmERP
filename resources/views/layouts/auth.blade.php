<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials._head')
<body class="login">
<div class="container">
    @yield('content')    
</div>
<script src="js/app.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
</body>
</html>
