@extends('layouts.default')

@section('title', 'Login page')

@section('page-classes', 'page--login')

@section('content')
<h1 class="page__title" style="text-align:center;">Login page</h1>
	
	<div class="row">	
		<div class="col-md-4 col-md-offset-4">
		{{ Form::open(['route' => 'sessions.store']) }}
			<div class="form-group">
				{{ Form::label('username', 'Username :') }}
				{{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) }}
				{{ $errors->first('username', '<span class="bg-danger">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password :') }}
				{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
				{{ $errors->first('password', '<span class="bg-danger">:message</span>') }}
			</div>

			<div class="form-group">
				<a href="#">Forgot your password ?</a>
			</div>
			
			<div class="form-inline">
				<div class="form-group">
					{{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
				</div>

				<div class="form-group">
					or <a href="{{ route('register') }}" class="btn btn-info">Register</a>
				</div>
			</div>
		{{ Form::close() }}
		</div>
	</div>
@stop