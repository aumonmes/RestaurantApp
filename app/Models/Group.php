<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Group extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'group';

	/* Relationships */

	/**
	 * A group has many dishes
	 * 
	 * @return Relation
	 */
	public function dishes() : Relation {
		return $this->hasMany('App\Dish', 'group_id', 'id');
	}
}
