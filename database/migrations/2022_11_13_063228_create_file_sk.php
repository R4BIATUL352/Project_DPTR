<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_sk', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['pemanfaatan', 'pengawasan']);
            $table->string('path');
            $table->unsignedBigInteger('pemanfaatan_id')->nullable();
            $table->unsignedBigInteger('pengawasan_id')->nullable();
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
        Schema::dropIfExists('file_sk');
    }
};
