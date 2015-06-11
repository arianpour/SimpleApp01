<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address_books', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('client_id');
            $table->string('building');
            $table->text('street');
            $table->integer('postcode');
            $table->string('state');
            $table->string('city');
            $table->integer('phoneNo');
            $table->string('Email', 100);
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('address_books');
	}

}
