<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Dish extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'dish';

	/* Relationships */

	/**
	 * A dish belongs to one group
	 * 
	 * @return Relation
	 */
	public function group() : Relation {
		return $this->belongsTo('App\Group', 'group_id', 'id');
	}

	/**
	 * A dish can have many specials
	 * 
	 * @return Relation
	 */
	public function specials() : Relation {
		return $this->belongsToMany('App\Special', 'dish_special', 'dish_id', 'special_id');
	}
}
