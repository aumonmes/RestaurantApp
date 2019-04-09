<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishTable extends Migration {
	private $table = 'dish';
	
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
			$table->bigInteger('group_id')->unsigned();

			// Fields
			$table->string('name', 32);
			$table->decimal('price', 10, 2);
			$table->string('image');
			$table->boolean('printer')->default(0);

			// Constraints
			$table->foreign('group_id')
				->references('id')->on('group')
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