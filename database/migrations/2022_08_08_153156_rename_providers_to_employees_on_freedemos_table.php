<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameProvidersToEmployeesOnFreedemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('free_demos', function (Blueprint $table) {
            $table->dropColumn('providers');
            $table->enum('employees', ['0-49', '50-99', '100-500'])->default('0-49')->after('business_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('free_demos', function (Blueprint $table) {
            $table->dropColumn('employees');
            $table->enum('providers', ['1', '2-4', '5-9', '10-24', '25-99', '100-499', '500+', '1000+'])->default('1')->after('business_type');
        });
    }
}
