<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceRechargeRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_recharge_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->double('amount');
            $table->string('type');
            $table->text('comment');
            $table->text('file');

            $table->string('status')->default('New');

            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_recharge_requests');
    }
}
