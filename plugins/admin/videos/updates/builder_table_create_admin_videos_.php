<?php namespace Admin\Videos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminVideos extends Migration
{
    public function up()
    {
        Schema::create('admin_videos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_tm', 256);
            $table->string('title_ru', 256);
            $table->string('title_en', 256);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_videos_');
    }
}
