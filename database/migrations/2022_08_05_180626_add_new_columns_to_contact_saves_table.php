<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToContactSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_saves', function (Blueprint $table) {
            //$table->renameColumn('name','first_name');
            $table->string('last_name')->after('name')->nullable();
            $table->string('phone')->after('email')->nullable();
            $table->string('business_type')->after('phone')->nullable();
            $table->string('employees_count')->after('business_type')->nullable();
            $table->string('business_name')->after('employees_count')->nullable();
            $table->string('query_type')->after('business_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_saves', function (Blueprint $table) {
            //$table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('business_type');
            $table->dropColumn('employees_count');
            $table->dropColumn('business_name');
            $table->dropColumn('query_type');
        });
    }
}
