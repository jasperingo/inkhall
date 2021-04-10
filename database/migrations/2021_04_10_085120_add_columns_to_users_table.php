<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('username')->unique()->after('email');
            $table->string('photo')->nullable()->after('password');
            $table->string('bio')->nullable()->after('photo');
            $table->integer('linked_facebook')->nullable()->after('bio');
            $table->integer('linked_google')->nullable()->after('linked_facebook');
            $table->integer('receive_email_digest')->after('linked_google');
            $table->integer('receive_social_notification')->after('receive_email_digest');

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
            
            $table->dropColumn('username');
             $table->dropColumn('photo');
            $table->dropColumn('bio');
            $table->dropColumn('linked_facebook');
            $table->dropColumn('linked_google');
            $table->dropColumn('receive_email_digest');
            $table->dropColumn('receive_social_notification');

        });
    }
}

