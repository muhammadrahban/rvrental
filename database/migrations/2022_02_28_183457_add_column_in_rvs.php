<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInRvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rvs', function (Blueprint $table) {
            $table->double('price_night')->nullable();
            $table->double('price_week')->nullable();
            $table->double('price_month')->nullable();
            $table->double('booking_deposite')->nullable();
            $table->double('security_deposite')->nullable();
            $table->double('balance_due')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rvs', function (Blueprint $table) {
            //
        });
    }
}
