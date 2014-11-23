<?php

class Tag extends \Eloquent {
	protected $fillable = [];

	// Relation Tag __belongs_to_many__ Link
	public function tag() {

		return $this->belongsToMany('Link');

	}
}