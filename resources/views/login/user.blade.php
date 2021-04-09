

@extends('layout')


@section('title', '@'.$user->username)


@section('main_content')

<dl>
	
	<dt>ID</dt>
	<dd><?= $user->id; ?></dd>

	<dt>Name</dt>
	<dd><?= $user->name; ?></dd>

	<dt>Userame</dt>
	<dd><?= $user->username; ?></dd>

	<dt>Joined</dt>
	<dd><?= $user->created_at; ?></dd>

</dl>



@endsection



