<?php
/**
 * Created by Keios Solutions
 * User: Jakub Zych
 * Date: 8/28/16
 * Time: 1:28 PM
 */
namespace Keios\MailgunEndpoint\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateMailgunNotificationsTable
 * @package Keios\MailgunEndpoint\Updates
 */
class CreateMailgunNotificationsTable extends Migration
{
    /**
     * Creates table
     */
    public function up()
    {
        Schema::create(
            'keios_mailgunendpoint_mailgun_notifications',
            function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('messageId');
                $table->dateTime('date');
                $table->string('sender');
                $table->string('receiver');
                $table->string('subject');
                $table->text('bodyHtml')->nullable();
                $table->text('bodyRaw');
                $table->timestamps();
            });
    }

    /**
     * Drops table
     */
    public function down()
    {
        Schema::dropIfExists('keios_mailgunendpoint_mailgun_notifications');
    }
}
