<?php namespace JumpLink\Ships\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkShipsShips extends Migration
{
    public function up()
    {
        Schema::table('jumplink_ships_ships', function($table)
        {
            $table->string('cc', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_ships_ships', function($table)
        {
            $table->dropColumn('cc');
        });
    }
}
