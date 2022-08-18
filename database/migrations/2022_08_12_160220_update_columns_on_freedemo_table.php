<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsOnFreedemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('free_demos', function (Blueprint $table) {
            $table->renameColumn('company_name', 'business_name')->nullable()->change();
            \DB::statement("ALTER TABLE `free_demos` CHANGE `employees` `employees` ENUM('0-49', '50-99', '100-500') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci AFTER `business_type`;");
            $table->dropColumn('locations');
            \DB::statement("ALTER TABLE `free_demos` CHANGE `business_type` `business_type` ENUM('private', 'public') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci AFTER `phone`;");
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
            $table->renameColumn('business_name', 'company_name')->change();
            \DB::statement("ALTER TABLE `free_demos` CHANGE `employees` `employees` ENUM('0-49', '50-99', '100-500') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0-49' BEFORE `created_at`;");
            $table->integer('locations')->default(1);
            \DB::statement("ALTER TABLE `free_demos` CHANGE `business_type` `business_type` ENUM('salon', 'spa', 'medspa', 'fitness', 'other') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'salon' AFTER `phone`;");
        });
    }
}
