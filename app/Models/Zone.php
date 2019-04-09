<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Zone extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'zone';

	/* Relationships */

	/**
	 * Zone has many tables
	 * 
	 * @return Relation
	 */
	public function tables() : Relation {
		return $this->hasMany('App\Table', 'zone_id', 'id');
	}


}
