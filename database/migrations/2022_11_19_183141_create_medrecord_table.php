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
        Schema::create('medrecord', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date');
            $table->text('detail');
            $table->string('dr_name');
            $table->text('medication_generic_name');
            $table->text('drug_name');
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
        Schema::dropIfExists('medrecord');
    }
};
