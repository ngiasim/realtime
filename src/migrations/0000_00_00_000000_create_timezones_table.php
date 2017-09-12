<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTimezonesTable extends Migration
{
	public function up()
	{
		//schema migrations here
		Schema::create('timezones', function(Blueprint $t)
		{
			$t->increments('id')->unsigned();
			$t->string('name', 255);
			$t->string('code', 255);
			$t->text('description', 255);
			$t->timestamps();
		});

	}
	public function down()
	{
		Schema::drop('timezones');
	}
}
