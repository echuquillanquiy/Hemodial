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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('ap_pat');
            $table->string('ap_mat');
            $table->string('firstname');
            $table->string('secondname');
            $table->string('dni')->unique();
            $table->date('date_of_birth');
            $table->string('age');
            $table->enum('sex', ['MASCULINO', 'FEMENINO']);
            $table->string('address');
            $table->string('code')->unique();
            $table->string('access');
            $table->string('sequence');

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
        Schema::dropIfExists('patients');
    }
};
