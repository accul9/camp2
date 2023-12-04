<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->renameColumn('f_coupon_id', 'coupon_id');
            $table->renameColumn('f_coupon_code', 'coupon_code');
            $table->renameColumn('f_coupon_valid_date', 'coupon_valid_date	');
            $table->renameColumn('f_coupon_expired_date', 'coupon_expired_date');
            $table->renameColumn('f_coupon_amount', 'coupon_amount');
            $table->renameColumn('f_coupon_max', 'coupon_max');
            $table->renameColumn('f_coupon_min_total', 'coupon_min_total'); //coupon使用するための最低金額
            $table->renameColumn('f_coupon_max_per_user', 'coupon_max_per_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            //
        });
    }
};
