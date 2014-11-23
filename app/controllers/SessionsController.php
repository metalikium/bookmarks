<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 * When hiting the login route
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('login.login');
	}


	/**
	 * Store a newly created resource in storage.
	 * When the login form is send
	 * 
	 * @return Response
	 */
	public function store()
	{
		// validation
		$inputs = Input::only('username', 'password');
		$rules  = [
			'username' => 'required|exists:users,username',
			'password' => 'required'
		];

		$validation = Validator::make($inputs, $rules);

		if ( Auth::attempt($inputs) ) {
			// If auth attempt passes, Laravel sets a session with user infos
			$logged_user = Auth::user()->username;
			return 'Logged as ' . $logged_user;
			
			return Redirect::route('home');
		}

		return Redirect::route('login')->withInput()->withErrors($validation->messages());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 * When hiting the logout route
	 * 
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::route('login');
	}


}
