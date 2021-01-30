<?php namespace Indikator\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddLocaleFieldToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('locale')->default('tk');
        });


        Schema::table('indikator_news_categories', function($table)
        {
            $table->string('name_tm')->nullable();
            $table->string('name_ru')->nullable();
        });
    }

    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('locale');
        });

        Schema::table('indikator_news_categories', function($table)
        {
            $table->dropColumn('name_tm');
            $table->dropColumn('name_ru');
        });
    }
}