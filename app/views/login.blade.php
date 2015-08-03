<!doctype html>
<html>
	<head>
		<title>Look at me Login</title>
	</head>
	<body>
		<!-- ,'method'=>'POST' -->
		{{ Form::open(array('url' => 'login')) }}

		<h1>Login</h1>
		<?php var_dump(Auth::user()) ?>
		<p>
		    {{ Form::label('email', 'Dirección de Email') }}
		    {{ Form::text('email', Input::old('email'), array('placeholder' => 'alex@data.com')) }}
		</p>

		<p>
		    {{ Form::label('password', 'Password') }}
		    {{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
		{{ Form::close() }}
	</body>
</html>