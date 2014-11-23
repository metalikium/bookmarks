<?php

class Tag extends \Eloquent {
	protected $fillable = [];

	// Relation Tag __belongs_to_many__ Link
	public function link() {

		return $this->belongsToMany('Link');

	}
}