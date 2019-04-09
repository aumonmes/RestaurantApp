<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaiterTable extends Migration {
	private $table = 'waiter';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create($this->table, function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();

			// Fields
			$table->string('name', 32);
			$table->string('image', 64);
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
