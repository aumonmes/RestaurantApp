<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishSpecialTable extends Migration {
	private $table = 'dish_special';
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create($this->table, function (Blueprint $table) {
			// FKs
			$table->bigInteger('dish_id')->unsigned();
			$table->bigInteger('special_id')->unsigned();

			// Constraints
			$table->foreign('dish_id')
				->references('id')->on('dish')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('special_id')
				->references('id')->on('special')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists($this->table);
	}
}
