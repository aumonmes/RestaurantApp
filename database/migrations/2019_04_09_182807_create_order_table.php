<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {
	private $table = 'order';
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create($this->table, function (Blueprint $table) {

			// FKs
			$table->bigInteger('ticket_id')->unsigned();
			$table->bigInteger('dish_id')->unsigned();

			// Fields
			$table->smallInteger('quantity')->default(1);
			$table->decimal('price', 10, 2);
			$table->string('dish_name', 16);
			$table->dateTime('sent')->nullable();
			$table->string('specials')->nullable();

			// Constraints
			$table->foreign('ticket_id')
				->references('id')->on('ticket')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');

			$table->foreign('dish_id')
				->references('id')->on('dish')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
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