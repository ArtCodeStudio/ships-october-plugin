<?php namespace JumpLink\Ships\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJumplinkShipsShips extends Migration
{
    public function up()
    {
        Schema::create('jumplink_ships_ships', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('buildingyard')->nullable();
            $table->string('yardtype')->nullable();
            $table->string('type')->nullable();
            $table->string('yearbuilt')->nullable();
            $table->string('dwat')->nullable();
            $table->string('intake20')->nullable();
            $table->string('intake40')->nullable();
            $table->string('homog14')->nullable();
            $table->string('reefer')->nullable();
            $table->string('gear')->nullable();
            $table->string('maxspeed')->nullable();
            $table->string('consumption')->nullable();
            $table->string('ice')->nullable();

            $table->string('loa')->nullable();
            $table->string('dwcc')->nullable();
            $table->string('cranes')->nullable();
            $table->string('imo')->nullable();
            $table->string('beam')->nullable();
            $table->string('flag')->nullable();
	        $table->string('image')->nullable();
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('jumplink_ships_ships');
    }
}
