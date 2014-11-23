<?php

class Link extends \Eloquent {
	protected $fillable = [];

	// Relation Link __has_many__ Tag
	public function tag() {

		return $this->belongsToMany('Tag');

	}
}