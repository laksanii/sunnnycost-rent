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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_order');
            $table->date('tgl_rental');
            $table->date('tgl_kembali');
            $table->foreignId('payment_id')->constrained('payments');
            $table->string('payment_status');
            $table->integer('amount');
            $table->decimal('ongkir', $precision = 10, $scale = 0);
            $table->decimal('total', $precision = 10, $scale = 0);
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('orders');
    }
};