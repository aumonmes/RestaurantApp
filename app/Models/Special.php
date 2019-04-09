<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Special extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'special';

	/* Relationships */

	/**
	 * A special can belong to many dishes
	 * 
	 * @return Relation
	 */
	public function specials() : Relation {
		return $this->belongsToMany('App\Dish', 'dish_special', 'special_id', 'dish_id');
	}
}
