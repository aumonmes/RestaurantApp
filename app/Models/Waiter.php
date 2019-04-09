<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Waiter extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'waiter';

	/* Relationships */
	/**
	 * A waiter can have many open tickets
	 * 
	 * @return Relation
	 */
	public function tickets() {
		return $this->hasMany('App\Ticket', 'waiter_id', 'id');
	}
}
