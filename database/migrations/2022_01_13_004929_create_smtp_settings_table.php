<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmtpSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smtp_settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();
            $table->enum('smtp_mailer', ['smtp', 'postmark', 'mailgun', 'sendmail']);
            $table->string('smtp_mail_host');
            $table->enum('smtp_mail_port', ['465', '587', '2525', '3306']);
            $table->string('smtp_mail_username');
            $table->string('smtp_mail_password');
            $table->enum('smtp_mail_encryption', ['none', 'ssl', 'tls']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smtp_settings');
    }
}
