<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketSoldTable extends Migration {
	private $table = 'ticket_sold';
	
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
			$table->bigInteger('table_id')->nullable()->unsigned();
			$table->bigInteger('waiter_id')->nullable()->unsigned();

			// Fields
			$table->string('table_name');
			$table->string('waiter_name');
			$table->smallInteger('people')->unsigned();
			$table->decimal('price', 10, 2);
			$table->dateTime('submited');

			// Constraints
			$table->foreign('table_id')
				->references('id')->on('table')
				->onUpdate('CASCADE')
				->onDelete('SET NULL');
			$table->foreign('waiter_id')
				->references('id')->on('waiter')
				->onUpdate('CASCADE')
				->onDelete('SET NULL');
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