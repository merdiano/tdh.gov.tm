<?php namespace Admin\WeeklyNews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminWeeklynewsPosts extends Migration
{
    public function up()
    {
        Schema::table('admin_weeklynews_posts', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title', 256)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_weeklynews_posts', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('title', 256)->default('\'null\'')->change();
        });
    }
}
