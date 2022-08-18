<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreedemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_demos', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->integer('locations')->default(1);
            $table->enum('business_type', ['salon', 'spa', 'medspa', 'fitness', 'other'])->default('salon');
            $table->enum('providers', ['1', '2-4', '5-9', '10-24', '25-99', '100-499', '500+', '1000+'])->default('1');
            $table->enum('status', ['pending', 'canceled', 'accepted', 'rejected', 'completed'])->default('pending');
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
        Schema::dropIfExists('free_demos');
    }
}
