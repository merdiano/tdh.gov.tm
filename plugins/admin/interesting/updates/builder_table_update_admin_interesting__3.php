<?php namespace Admin\Interesting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminInteresting3 extends Migration
{
    public function up()
    {
        Schema::table('admin_interesting_', function($table)
        {
            $table->string('url');
            $table->string('title', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_interesting_', function($table)
        {
            $table->dropColumn('url');
            $table->string('title', 191)->default('\'null\'')->change();
        });
    }
}
