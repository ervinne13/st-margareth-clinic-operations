<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table)
        {
            $table->string('code', 30)->primary();
            $table->boolean('is_local')->default(false);
            $table->string('display_name', 100)->unique();
            $table->string('company_code', 30);

            $table->timestamps();

            $table->foreign('company_code')
                ->references('code')
                ->on('company')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }

}
