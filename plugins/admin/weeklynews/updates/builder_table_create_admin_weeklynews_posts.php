<?php namespace Admin\WeeklyNews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminWeeklynewsPosts extends Migration
{
    public function up()
    {
        Schema::create('admin_weeklynews_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 256)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_weeklynews_posts');
    }
}
