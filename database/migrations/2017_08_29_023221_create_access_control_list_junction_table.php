<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessControlListJunctionTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_control_list', function (Blueprint $table)
        {
            $table->string('role_code', 30);
            $table->string('module_code', 30);
            $table->string('access_control_code', 30);

            $table->timestamps();

            $table->primary(['role_code', 'module_code', 'access_control_code'], 'access_control_list_id');

//            $table->foreign('role_code')
//                ->references('code')
//                ->on('code');

            $table->foreign('module_code')
                ->references('code')
                ->on('module')
                ->onUpdate('cascade')
                ->onDelete('cascade');

//            $table->foreign('access_control_code')
//                ->references('code')
//                ->on('acces_control');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_control_list');
    }

}
