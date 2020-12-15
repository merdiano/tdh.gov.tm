<?php namespace Admin\Interesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminInteresting extends Migration
{
    public function up()
    {
        Schema::create('admin_interesting_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('image');
            $table->integer('count');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_interesting_');
    }
}
