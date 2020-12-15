<?php namespace Admin\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminPosts extends Migration
{
    public function up()
    {
        Schema::create('admin_posts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('hvh')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_posts_');
    }
}
