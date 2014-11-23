@extends('layouts.default')

@section('title', 'Register page')

@section('page-classes', 'page--register')

@section('content')
	<h1 class="page__title" style="text-align:center;">Register page</h1>
	
	<div class="row">	
		<div class="col-md-4 col-md-offset-4">
		{{ Form::open(['route' => 'users.store']) }}
			<div class="form-group">
				{{ Form::label('username', 'Username :') }}
				{{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) }}
				{{ $errors->first('username', '<span class="bg-danger">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'E-mail :') }}
				{{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
				{{ $errors->first('email', '<span class="bg-danger">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password :') }}
				{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
				{{ $errors->first('password', '<span class="bg-danger">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation', 'Password confirmation:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password']) }}
				{{ $errors->first('password_confirmation', '<span class="bg-danger">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::submit('Register', ['class' => 'btn btn-info col-md-12']) }}
			</div>
		{{ Form::close() }}
		</div>
	</div>
@stop