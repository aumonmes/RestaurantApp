<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Table extends Model {
  /**
	 * Table for the model
	 * 
	 * @var string
	 */
	protected $table = 'table';

	/* Relationships */

	/**
	 * Table belongs to one zone
	 * 
	 * @return Relation
	 */
	public function zone() : Relation {
		return $this->belongsTo('App\Zone', 'zone_id', 'id');
	}
}
