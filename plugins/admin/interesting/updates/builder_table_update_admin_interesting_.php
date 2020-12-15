<?php namespace Admin\Interesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminInteresting extends Migration
{
    public function up()
    {
        Schema::table('admin_interesting_', function($table)
        {
            $table->string('title', 191)->default('null')->change();
            $table->integer('count')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_interesting_', function($table)
        {
            $table->string('title', 191)->default('NULL')->change();
            $table->integer('count')->default(null)->change();
        });
    }
}
