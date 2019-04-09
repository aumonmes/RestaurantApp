<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialTable extends Migration {
	private $table = 'special';
	
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
			$table->string('name', 16);
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