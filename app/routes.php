<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	/*
	$link        = new Link;
	$link->title = 'Grooveshark';
	$link->url   = 'http://grooveshark.com/';
	$link->body  = 'Music streaming';
	$link->save();
	
	$tag          = new Tag;
	$tag->name    = 'stream';
	$tag->link_id = $link->id;
	$tag->save();

	$tag          = new Tag;
	$tag->name    = 'music';
	$tag->link_id = $link->id;
	$tag->save();
	*/
	
	
	/*
	$link        = new Link;
	$link->title = 'TwitchTV';
	$link->url   = 'http://twitch.tv';
	$link->body  = 'Game streaming';
	$link->save();

	$tag          = new Tag;
	$tag->name    = 'stream';
	$tag->link_id = $link->id;
	$tag->save();
	
	$tag          = new Tag;
	$tag->name    = 'game';
	$tag->link_id = $link->id;
	$tag->save();
	*/
	
	

	// display all links for the selected tag
	$tags = Tag::whereName('game')->first();
	return $tags->link;
	// display all tags for the selected link
	$links = Link::find(2)->tag;
	return $links;

	return View::make('hello');
});
