<?php namespace Admin\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminPhotos2 extends Migration
{
    public function up()
    {
        Schema::table('admin_photos_', function($table)
        {
            $table->string('title_tm', 191)->nullable()->change();
            $table->date('date')->nullable()->change();
            $table->string('title_ru', 191)->nullable()->change();
            $table->string('title_en', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_photos_', function($table)
        {
            $table->string('title_tm', 191)->nullable(false)->change();
            $table->date('date')->nullable(false)->change();
            $table->string('title_ru', 191)->nullable(false)->change();
            $table->string('title_en', 191)->nullable(false)->change();
        });
    }
}
