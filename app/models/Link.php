<?php

class Link extends \Eloquent {
	protected $fillable = [];

	// Relation Link __belongs_to_many__ Tag
	public function tag() {

		return $this->belongsToMany('Tag');

	}


	// Ralation Link __belongs_to__ User
	public function user() {

		return $this->belongsTo('User');

	}
}