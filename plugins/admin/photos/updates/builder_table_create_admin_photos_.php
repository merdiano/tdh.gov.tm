<?php namespace Admin\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminPhotos extends Migration
{
    public function up()
    {
        Schema::create('admin_photos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->date('published_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_photos_');
    }
}
