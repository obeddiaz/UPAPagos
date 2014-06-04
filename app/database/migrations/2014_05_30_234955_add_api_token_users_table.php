<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApiTokenUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
        {
            Schema::table('users_auth', function(Blueprint $table) {

                $table->string('api_token',96)->nullable();

            });
        }


        public function down()
        {
            Schema::table('users_auth', function(Blueprint $table) {

                $table->dropColumn('api_token');

            });
        }

}
