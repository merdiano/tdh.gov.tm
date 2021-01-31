<?php namespace Admin\Videos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminVideos2 extends Migration
{
    public function up()
    {
        Schema::table('admin_videos_', function($table)
        {
            $table->string('title_tm', 256)->nullable()->change();
            $table->string('title_ru', 256)->nullable()->change();
            $table->string('title_en', 256)->nullable()->change();
            $table->date('date')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_videos_', function($table)
        {
            $table->string('title_tm', 256)->nullable(false)->change();
            $table->string('title_ru', 256)->nullable(false)->change();
            $table->string('title_en', 256)->nullable(false)->change();
            $table->date('date')->nullable(false)->change();
        });
    }
}
