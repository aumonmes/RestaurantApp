<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Ticket extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'ticket';

	/* Relationships */

	/**
	 * A ticket has many orders
	 * 
	 * @return Relation
	 */
	public function orders() : Relation {
		return $this->hasMany('App\Order', 'ticket_id', 'id');
	}

	/**
	 * A ticket belongs to one table
	 * 
	 * @return Relation
	 */
	public function table() : Relation {
		return $this->belongsTo('App\Table', 'table_id', 'id');
	}

	/**
	 * A ticket belongs to one waiter
	 * 
	 * @return Relation
	 */
	public function waiter() : Relation {
		return $this->belongsTo('App\Waiter', 'waiter_id', 'id');
	}
}
