<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTable extends Migration {
	private $table = 'table';
	
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
			$table->bigInteger('zone_id')->unsigned();

			// Fields
			$table->string('name', 16);
			$table->smallInteger('pos_x')->unsigned()->default(0);
			$table->smallInteger('pos_y')->unsigned()->default(0);
			$table->boolean('orientation')->default(0);
			$table->tinyInteger('capacity')->unsigned()->default(1);

			// Constraints
			$table->foreign('zone_id')
				->references('id')->on('zone')
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
