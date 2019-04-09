<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration {
	private $table = 'ticket';
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create($this->table, function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();

			// FKs
			$table->bigInteger('table_id')->unsigned();
			$table->bigInteger('waiter_id')->unsigned();

			// Fields
			$table->smallInteger('people')->unsigned();
			$table->decimal('price', 10, 2);

			// Constraints
			$table->foreign('table_id')
				->references('id')->on('table')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('waiter_id')
				->references('id')->on('waiter')
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