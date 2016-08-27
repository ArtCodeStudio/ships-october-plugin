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
            $table->string('name');
            $table->string('buildingyard');
            $table->string('yardtype');
            $table->smallInteger('type');
            $table->smallInteger('yearbuilt');
            $table->integer('dwat');
            $table->integer('intake20');
            $table->integer('intake40');
            $table->integer('homog14');
            $table->integer('reefer');
            $table->boolean('gear');
            $table->decimal('maxspeed', 10, 0);
            $table->integer('consumption');
            $table->boolean('ice');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jumplink_ships_ships');
    }
}
