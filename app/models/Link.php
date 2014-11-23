<?php

class Link extends \Eloquent {
	protected $fillable = [];

	// Relation Link __has_many__ Tag
	public function link() {

		return $this->hasMany('Tag');
		
	}
}