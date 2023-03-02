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
        Schema::create('sdipktkns', function (Blueprint $table) {
            $table->id();
            $table->integer('id_data');
            $table->integer('gt');
            $table->date('crime_date');
            $table->bigInteger('potential_loss');
            $table->bigInteger('saving')->nullable();
            $table->float('productivity');
            $table->integer('trip');
            $table->bigInteger('price');
            $table->string('ministry_name');
            $table->string('ministry_fullname');
            $table->string('ship_type');
            $table->string('action_name');
            $table->string('crime_name');
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
        Schema::dropIfExists('sdipktkns');
    }
};
