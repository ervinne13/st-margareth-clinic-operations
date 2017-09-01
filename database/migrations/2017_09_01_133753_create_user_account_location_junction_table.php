<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountLocationJunctionTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account_location', function (Blueprint $table)
        {
            $table->string('user_account_username', 30);
            $table->string('location_code', 30);
            $table->timestamps();

            $table->primary(['user_account_username', 'location_code'], 'user_account_location_pk');

            $table->foreign('user_account_username')
                ->references('username')
                ->on('user_account');

//            $table->foreign('location_code')
//                ->references('location')
//                ->on('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account_location');
    }

}
