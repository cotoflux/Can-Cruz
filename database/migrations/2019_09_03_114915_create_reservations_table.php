<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('postalCode');
            $table->date('checkinDate');
            $table->date('checkoutDate');
            $table->integer('roomNumber');
            $table->integer('numberPeople');
            $table->integer('numberPets')->default('0');
            $table->boolean('breakfast')->nullable();
            $table->boolean('lunch')->nullable();
            $table->boolean('dinner')->nullable();
            $table->boolean('discount')->nullable();
            $table->integer('discountValue')->nullable();
            $table->double('finalPrice')->nullable();
            $table->boolean('validated')->default(false);
            $table->string('comments')->nullable();
            $table->string('language');
            $table->boolean('dataProtection')->default(false); 
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
        Schema::dropIfExists('reservations');
    }
}
