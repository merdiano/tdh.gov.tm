<?php namespace Admin\Interesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminInteresting2 extends Migration
{
    public function up()
    {
        Schema::table('admin_interesting_', function($table)
        {
            $table->string('title', 191)->default('null')->change();
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('admin_interesting_', function($table)
        {
            $table->string('title', 191)->default('\'null\'')->change();
            $table->string('image', 191);
        });
    }
}
