<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberSeriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_series', function (Blueprint $table)
        {
            $table->string('code', 30)->primary();
            $table->string('module_code', 30)->index();
            $table->string("year_prefix_format", 30)->nullable();
            $table->boolean("uses_code_as_prefix")->default(true);
            $table->date('effective_date');
            $table->integer('starting_number')->default(0);
            $table->integer('ending_number')->default(9999);
            $table->integer('last_number_used')->default(0);
            $table->string('last_number_series_used', 30)->nullable();
            $table->date('last_date_used')->nullable();
            $table->timestamps();

            $table->foreign('module_code')
                ->references('code')
                ->on('module')
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
        Schema::dropIfExists('number_series');
    }

}
