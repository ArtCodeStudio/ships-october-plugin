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
            $table->smallInteger('type')->nullable();
            $table->smallInteger('yearbuilt')->nullable();
            $table->integer('dwat')->nullable();
            $table->integer('intake20')->nullable();
            $table->integer('intake40')->nullable();
            $table->integer('homog14')->nullable();
            $table->integer('reefer')->nullable();
            $table->boolean('gear')->nullable();
            $table->decimal('maxspeed', 10, 0)->nullable();
            $table->integer('consumption')->nullable();
            $table->boolean('ice')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jumplink_ships_ships');
    }
}
