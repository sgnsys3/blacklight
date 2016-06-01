<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegisInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::create('regis_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->string('education');
            $table->string('port')->nullable();
            $table->string('modeling')->nullable();
            $table->string('email')->nullable();
            $table->string('tel_self')->nullable();
            $table->string('tel_modeling')->nullable();
            $table->string('img_name')->nullable();
            $table->integer('status')->default(0);
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
        Schema::drop('regis_info');
    }
}
