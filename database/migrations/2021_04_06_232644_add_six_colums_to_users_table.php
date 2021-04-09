<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSixColumsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('bio');
            $table->string('photo');
            $table->integer('linked_facebook');
            $table->integer('link_google');
            $table->integer('receive_email_digest');
            $table->integer('receive_social_notification');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropIfExists('bio');
            $table->dropIfExists('photo');
            $table->dropIfExists('linked_facebook');
            $table->dropIfExists('link_google');
            $table->dropIfExists('receive_email_digest');
            $table->dropIfExists('receive_social_notification');

        });
    }
}



