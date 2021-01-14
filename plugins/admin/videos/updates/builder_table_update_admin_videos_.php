<?php namespace Admin\Videos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminVideos extends Migration
{
    public function up()
    {
        Schema::table('admin_videos_', function($table)
        {
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::table('admin_videos_', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
