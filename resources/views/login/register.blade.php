




@extends('layout')



@section('title', 'Register')


@section('page_style')

<style type="text/css">

	form {
		width: 60%;
		margin: auto;
		border: 1px solid #0000FF;
		border-top-width: 10px;
		border-bottom-width: 10px;
	}

	form > p {
		width: 90%;
		margin-left: auto;
		margin-right: auto;
	}

	form label {
		font-size: 0.75em;
	}

	form label.error {
		color: #FF0000;
	}

	form input {
		width: 100%;
		font-size: 1em;
		display: block;
		padding: 0.25em;
		border: 1px solid #0000FF;
	}

	form > p > button {
		width: 50%;
		color: #FFFFFF;
		font-size: 1em;
		display: block;
		padding: 0.5em;
		background-color: #0000FF;
		border: 1px solid #0000FF;
	}

	form > p > button:focus,
	form > p > button:active {
		background-color: #808080;
	}



</style>

@endsection



@section('main_content')



<form method="POST" action="{{ inkhall_makeUrl('register') }}">
	
	@csrf

	<p>
		<label for="username-input" title="required">Userame</label>
		<input type="text" name="username" id="username-input" value="{{ old('username') }}" />
		@error('username')
		<label for="username-input" class="error">{{ $message }}</label>
		@enderror
	</p>

	<p>
		<label for="name-input">Name</label>
		<input type="text" name="name" id="name-input" value="{{ old('name') }}" />
		@error('name')
		<label for="username-input" class="error">{{ $message }}</label>
		@enderror
	</p>

	<p>
		<label for="email-input">Email</label>
		<input type="email" name="email" id="email-input" value="{{ old('email') }}" />
		@error('email')
		<label for="email-input" class="error">{{ $message }}</label>
		@enderror
	</p>

	<p>
		<label for="password-input">Password</label>
		<input type="password" name="password" id="password-input" />
		@error('password')
		<label for="password-input" class="error">{{ $message }}</label>
		@enderror
	</p>

	<p>
		<label for="password-confirm-input">Retype password</label>
		<input type="password" name="password_confirmation" id="password-confirm-input" />
		@error('password-confirmation')
		<label for="password-confirm-input" class="error">{{ $message }}</label>
		@enderror
	</p>

	<p>
		<button>Register</button>
	</p>

</form>

@endsection




