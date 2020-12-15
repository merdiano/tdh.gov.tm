<?php namespace Indikator\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddingNewLocalizedFieldsToPosts extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('title_tm');
            $table->string('title_ru');

            $table->string('introductory_tm');
            $table->string('introductory_ru');
            
            $table->string('content_tm');
            $table->string('content_ru');

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

            $table->dropColumn('title_tm');
            $table->dropColumn('title_ru');
            $table->dropColumn('introductory_tm');
            $table->dropColumn('introductory_ru');
            $table->dropColumn('content_tm');
            $table->dropColumn('content_ru');

        });

        Schema::table('indikator_news_categories', function($table)
        {
            $table->dropColumn('name_tm');
            $table->dropColumn('name_ru');
        });
    }
}