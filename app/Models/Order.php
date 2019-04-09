<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Order extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'order';

	/* Relationships */

	/**
	 * An order belongs to one dish
	 * 
	 * @return Relation
	 */
	public function dish() : Relation {
		return $this->belongsTo('App\Dish', 'dish_id', 'id');
	}
	
	/**
	 * An order belongs to one ticket
	 * 
	 * @return Relation
	 */
	public function ticket() : Relation {
		return $this->belongsTo('App\Ticket', 'ticket_id', 'id');
	}

	
}
