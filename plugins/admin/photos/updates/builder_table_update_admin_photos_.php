<?php namespace Admin\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminPhotos extends Migration
{
    public function up()
    {
        Schema::table('admin_photos_', function($table)
        {
            $table->string('title_ru');
            $table->string('title_en');
            $table->renameColumn('title', 'title_tm');
            $table->renameColumn('published_at', 'date');
        });
    }
    
    public function down()
    {
        Schema::table('admin_photos_', function($table)
        {
            $table->dropColumn('title_ru');
            $table->dropColumn('title_en');
            $table->renameColumn('title_tm', 'title');
            $table->renameColumn('date', 'published_at');
        });
    }
}
